<?php foreach ($courses as $key => $value): ?>
  <?php if ($key == 'course_name') $course_name = $value ?>
  <?php if ($key == 'course_college') $course_college = $value ?>
  <?php if ($key == 'course_website') $course_website = $value ?>
  <?php if ($key == 'course_code') $course_code = $value ?>
  <?php if ($key == 'course_gpa') $course_gpa = $value ?>
  <?php if ($key == 'course_rating') $course_rating = $value ?>
  <?php if ($key == 'course_description') $course_description = $value ?>
  <?php if ($key == 'course_professor') $course_professor = $value ?>  
  <?php if ($key == 'course_section') $course_section = $value ?> 
  <?php if ($key == 'course_id') $course_id = $value ?> 
  <?php if ($key == 'course_major') $course_major = $value ?>
  <?php if ($key == 'course_geo') $course_geo = $value ?>
  <?php if ($key == 'course_location') $course_location = $value ?>
<?php endforeach ?>

<div class = "col-md-4">
  <div class="jumbotron">
        <h3><? echo $course_code ?></h3>
        <p class="lead"><? echo "Name: ".$course_name ?></p>
        <p class="lead"><? echo "Department: ".$course_college?></p>
        <p class="lead"><? echo "Section: ". $course_section ?></p>
        <p class="lead"><? echo "Available: ".$course_section ?></p>
        <p class="lead"><? echo "Location: ".$course_location ?></p>
        <? echo $course_geo; ?>
        <p></p>
        
      </div>
</div>

<div class = "col-md-8">
  <div class="jumbotron">
        <div class="row-sm-2">
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button type="button" onclick="location='http://localhost/index.php/pages/schedule'">Add</button>
            <!--<button style="float: right; margin-right: 2em;">Add Class</button>  -->
          </div>
        </div>
        <h3>Description: </h3>
        <p class="lead"><? echo $course_description ?></p>
        <h3>About: </h3>
        <p class="lead"><? echo "Average GPA: ".$course_gpa ?></p>
        <p class="lead"><? echo "Rating:      ".$course_rating ?></p>
        <p></p>
        <h3>Taught by: </h3>
        <p class="lead"><a href="<? echo "http://localhost/index.php/professor/view/".$course_professor ?>"><? echo $course_professor ?></a></p>

        <div class = "row">
        <img src="http://wp.streetwise.co/wp-content/uploads/2012/08/Picture-213.png" class="img-responsive"/>
       
        </div>      
      </div>
</div>
