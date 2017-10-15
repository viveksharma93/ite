<?php include 'header.php';?>
    <section id="about-us">
        <div class="container">
			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Batches at ITE</h2>
					<p class="lead"></p>
				</div>

				<div class="row clearfix">
					<div class="col-md-12 col-sm-12">
						<div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="table-responsive">
                <table class="table table-bordered table-hover center-text" cellspacing="0" id="batchesTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Course Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Faculty</th>
                      <th>Mode of Training</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>RHCSA</td>
                      <td>30 Oct 2017</td>
                      <td>07:30 AM</td>
                      <td>Mr. Hemraj Singh Chouhan</td>
                      <td>Offline</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>RHCE</td>
                      <td>10 Oct 2017</td>
                      <td>05:30 PM</td>
                      <td>Mr. Hemraj Singh Chouhan</td>
                      <td>Offline</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>RHCVA</td>
                      <td>20 Oct 2017</td>
                      <td>07:30 PM</td>
                      <td>Mr. Bhalendra Singh</td>
                      <td>Offline</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>CEH</td>
                      <td>20 Oct 2017</td>
                      <td>06:00 PM</td>
                      <td>Mr. Hemraj Singh Chouhan</td>
                      <td>Offline</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>CEH</td>
                      <td>20 Oct 2017</td>
                      <td>06:00 AM</td>
                      <td>Mr. Hemraj Singh Chouhan</td>
                      <td>Online</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>OpenStack (CL110,CL210)</td>
                      <td>12 Oct 2017</td>
                      <td>05:30 AM</td>
                      <td>Mr. Hemraj Singh Chouhan</td>
                      <td>Online</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>OpenShift</td>
                      <td>25 Oct 2017</td>
                      <td>07:30 AM</td>
                      <td>Mr. Bhalendra Singh</td>
                      <td>Offline</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Docker</td>
                      <td>15 Oct 2017</td>
                      <td>05:00 AM</td>
                      <td>Mr. Hemraj Singh Chouhan</td>
                      <td>Online</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Kubernetes</td>
                      <td>13 Oct 2017</td>
                      <td>08:30 AM</td>
                      <td>Mr. Hemraj Singh Chouhan</td>
                      <td>Offline</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>RHCE</td>
                      <td>5 Oct 2017</td>
                      <td>06:30 AM</td>
                      <td>Mr. Pavan Shukla</td>
                      <td>Online</td>
                    </tr>
                  </tbody>
                </table>
                </div>
            </div>
					</div><!--/.col-lg-4 -->


				</div> <!--/.row -->

			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->

<?php include 'footer.php';?>

<script>
$(document).ready(function(){
    $('#batchesTable').dataTable();
});
</script>
