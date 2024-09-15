<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeaveHome</title>
    <link rel="stylesheet" href="catalog/view/css/homecss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container,
        .tabs {
            display: none;
        }

        .container,
        .tabs.active {
            display: block;
        }

        .canvasjs-chart-canvas{
            width: 100% !important;
            height: 500px !important;
        }
    </style>
</head>

<body>

    <?php
    // foreach ($users as $value) {
    //     // You can echo the values properly inside HTML
    //     echo "<h1>Name: " . htmlspecialchars($value['name']) . "</h1>";
    // }

    // echo $title;
    ?>

    <div class="wrapper">
        <aside>
            <ul>
                <li><a href="#1" onclick="showSection('1')">Section 1</a></li>
                <li><a href="#2" onclick="showSection('2')">Section 2</a></li>
                <li><a href="#3" onclick="showSection('3')">Section 3</a></li>
            </ul>
        </aside>
        <div class="container" id="contentArea">
            <div id="1" class="active tabs">
                <div class="col-md-12">
                <div>
                    <h2>Section 1</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam, distinctio explicabo molestias eveniet et esse quidem voluptatum est excepturi?
                </div>
                </div>
            </div>
            <div id="2" class="tabs">
                <div>
                    <h2>Section 2</h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam, distinctio explicabo molestias eveniet et esse quidem voluptatum est excepturi?
                </div>
            </div>
            <div id="3" class="tabs">
                 <div class="w-100" id="chartContainer"></div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"> </script>
        <script src="./js/homejs.js"></script>
        <script>
            function showSection(id) {
                const sections = document.querySelectorAll('.tabs');
                sections.forEach(section => {
                    section.classList.remove('active');
                });
                document.getElementById(id).classList.add('active');
            }


            // chart
            window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light1", // "light2", "dark1", "dark2"
                animationEnabled: false, // change to true		
                title:{
                    text: "Basic Column Chart"
                },
                data: [
                {
                    // Change type to "bar", "area", "spline", "pie",etc.
                    type: "column",
                    dataPoints: [
                        { label: "jan",  y: 10  },
                        { label: "Feb", y: 15  },
                        { label: "Mar", y: 25  },
                        { label: "Apr",  y: 30  },
                        { label: "May",  y: 28  },
                        { label: "jun",  y: 10  },
                        { label: "jul", y: 15  },
                        { label: "aug", y: 25  },
                        { label: "sep",  y: 30  },
                        { label: "oct",  y: 28  },
                        { label: "nov",  y: 30  },
                        { label: "dec",  y: 28  },
                    ]
                }
                ]
            });
            chart.render();

            }
        </script>
</body>

</html>