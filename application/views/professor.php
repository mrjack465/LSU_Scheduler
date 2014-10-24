<?php foreach ($professors as $key => $value): ?>
  <?php if ($key == 'professor_name') $prof_name = $value ?>
  <?php if ($key == 'professor_department') $prof_department = $value ?>
  <?php if ($key == 'professor_website') $prof_website = $value ?>
  <?php if ($key == 'professor_email') $prof_email = $value ?>
  <?php if ($key == 'professor_gpa') $prof_gpa = $value ?>
  <?php if ($key == 'professor_rating') $prof_rating = $value ?>
  <?php if ($key == 'professor_bio') $prof_bio = $value ?>
  <?php if ($key == 'professor_class') $prof_class = $value ?>  
  <?php if ($key == 'professor_image') $prof_image = $value ?>  
<?php endforeach ?>

<div class = "col-md-4">
  <div class="jumbotron">
        <h3><? echo $prof_name ?></h3>
        <p class="lead"><? echo $prof_department ?></p>
        <img src="http://placehold.it/150x150" class="img-responsive"/>
        <p class="lead"><a href="<? echo $prof_website ?>" target="blank">Website</a></p>
        <p class="lead"><a href="<? echo $prof_email ?>" target="blank">E-mail</a></p>
        <p></p>
        
      </div>
</div>

<div class = "col-md-8">
  <div class="jumbotron">
        <h3>Biography: </h3>
        <p class="lead"><? echo $prof_bio ?></p>
        <h3>About: </h3>
        <p class="lead"><? echo "Average GPA: ".$prof_gpa ?></p>
        <p class="lead"><? echo "Rating:      ".$prof_rating ?></p>
        <p></p>
        <h3>Teaches: </h3>
        <p class="lead"><? echo "" ?></p>

        <img src="http://wp.streetwise.co/wp-content/uploads/2012/08/Picture-213.png" class="img-responsive"/>
        
      </div>
</div>
