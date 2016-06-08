<div class="row about">
    <h2 class="center-align divider-line">About Gator Jack's</h2>
    <img class="about__image responsive-img z-depth-2" src="images/gator.jpg" alt="Welcome to Gator Jacks">
    <p class="flow-text">Here at Gator Jacks we provide a unique Cajun experience right here in Rexburg, Idaho. Whether it's a meaty, juice Ruben, or a mouth-watering rice bowl we have what you're look'n for! </p>
    <h4>We Cater!</h4>
    <a class="waves-effect waves-light btn-large" href="index.php?page=catering">Catering</a>
    <p class="flow-text"></p>
    <blockquote><h4>Now serving Breakfast!</h4><h4>Delivery coming soon.</h4>
    </blockquote>
</div>
<div class="row">
    <div class="col s12 m6 l6 ">
        <h3>Phone:</h3>
        <p class="flow-text">(208) 356-0779</p>
        <h3>Address:</h3>
        <p class="flow-text">160 W 2nd S, Rexburg, ID 83440</p>
    </div>
    <div class="col s12 m6 l6">
        <h3>Hours:</h3>
        <table>
            <thead>
                <tr>
                    <th data-field="id">Day</th>
                    <th data-field="name">Open</th>
                    <th data-field="price">Close</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Monday - Thursday</td>
                    <td>7:00am</td>
                    <td>9:00pm</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>7:00am</td>
                    <td>10:00pm</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>7:00am</td>
                    <td>10:00pm</td>
                </tr>
                   <tr>
                    <td>Sunday</td>
                    <td>Closed</td>
                    <td>Closed</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<?php if ($openShiftVar === null || $openShiftVar == ""){
        // Not in Openshift
        include 'components/menu/menu.php';
        
     }else{
        include $_SERVER['DOCUMENT_ROOT'].'/components/menu/menu.php'; 
     }
     ?>
    
</div>