<div class="container">
  <?php echo validation_errors(); ?>
  <?php echo form_open('course_search_verification'); ?>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h3>Search Courses</h3>
        <p class="lead">Find all the information you need on a class.</p>
        <div class="form-group">
          <input type="text" id="search_term" name="search_term" class="form-control" placeholder="Search Courses">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="column-fluid">
        <div class="span4">
          <h2>Average Class Grades</h2>
          <p> Worried about how challenging that elective is going to be? We'll show you the average GPA in that class.</p>
        </div>
        <div class="span4">
          <h2>What is class about again?</h2>
          <p>Read a description of the class as well as input from other students. </p>
       </div>
        <div class="span4">
          <h2>Build a schedule</h2>
          <p>Add a classes to your class list to build the schedule that you want.</p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>Jack Weinnig, Chester Schofield, Raymond Hendrix</p>
      </div>

    </div> 