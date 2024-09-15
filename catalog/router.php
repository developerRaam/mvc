<?php 

class Router {
    private $controller = 'Home';
    private $method = 'index';
    private $params = [];

    public function __construct() {

        $request = trim($_SERVER['REQUEST_URI'], '/');
        $request = filter_var($request, FILTER_SANITIZE_URL);
        $request = str_replace(DIR_APPLICATION . '/', '', $request);
        $explodeUrl = explode('/', $request);

        if (!empty($explodeUrl[1])) {
            $this->controller = ucfirst($explodeUrl[1]);
        }

        // Handle extra URL parameters
        $this->params = array_slice($explodeUrl, 2);

        $controllerFile = 'catalog/controller/' . $this->controller . '.php';

        // added library
        require_once DIR_MVC . 'library/model.php';
        require_once DIR_MVC . 'library/controller.php';
        require_once DIR_MVC . 'library/link.php';

        // Check if controller exists
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            
            $this->controller = $this->controller . 'Controller';
            
            if (!empty($explodeUrl[2])) {
                $this->method = $explodeUrl[2];
            }

            // die($this->method);
            // Initialize the controller object
            if (class_exists($this->controller)) {
                $controllerObj = new $this->controller();

                // Call the method if it exists, otherwise fallback to index
                if (method_exists($controllerObj, $this->method)) {
                    call_user_func_array([$controllerObj, $this->method], $this->params);
                } else {
                    // Handle missing method (fallback to 'index' or show error)
                    if (method_exists($controllerObj, $this->method)) {
                        $controllerObj->index();
                    } else {
                        $this->error("Method '{$this->method}' not found in controller '{$this->controller}'");
                    }
                }
            } else {
                $this->error("Controller class '{$this->controller}' not found");
            }
        } else {
            // Handle missing controller
            $this->error("Controller file '{$this->controller}' not found");
        }
    }

    private function error($message) {
        // Simple error handling, you can redirect to a 404 page here
        echo "<p>Error: $message</p>";
        exit();
    }
}
