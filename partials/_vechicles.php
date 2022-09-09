<div class="vehicles">
    <h5>WHAT WE OFFER</h5>
    <h1>Featured Vehicles</h1>

    <div class="vehiclesinfo" id="firstline">

        <?php
        for($i=1; $i<=3; $i++){
            echo '
            <div class="car one">
                <img src="images/'.$i.'-min-min.jpg">
                <div class="info">

                    <h3>Mercedes Grand Sedan</h3>
                    <p>Cheverolet <span>$500</span> /day</p>
                    <a href="booknow.php?catid='.$i.'"><button id="book">Book Now</button></a>
                    <button>Details</button>

                </div>
            </div>
            ';
        }
        ?>

    </div>

    <div class="vehiclesinfo" id="morecars">
        <?php
        for($i=4; $i<=9; $i++){
            echo '
            <div class="car one">
                <img src="images/'.$i.'-min-min.jpg">
                <div class="info">

                    <h3>Mercedes Grand Sedan</h3>
                    <p>Cheverolet <span>$500</span> /day</p>
                    <a href="booknow.php?catid='.$i.'"><button id="book">Book Now</button></a>
                    <button>Details</button>

                </div>
            </div>
            ';
        }
        ?>

    </div>

</div>

<!-- Drop Down -->
<div class="dropdown">
    <a href="#firstline"><button id="dropdownlaptop" onclick="dropdownlaptop()"><i class="fas fa-chevron-down"></i>MORE
            CARS <i class="fas fa-chevron-down"></i></button></a>
    <a href="#firstline"><button id="dropdownmobile" onclick="dropdownmobile()"><i class="fas fa-chevron-down"></i> MORE
            CARS <i class="fas fa-chevron-down"></i></button></a>
</div>