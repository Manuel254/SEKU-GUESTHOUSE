	 <!-- Form for Editing meals -->
	 <?php include 'db.php';?>
            	<div class="modal fade" role="dialog" id="foodedit">
            		<div class="modal-dialog">
            			<div class="modal-content">
            				<div class="modal-header">
								<h4 class="modal-title"><strong>ADD NEW MEAL</strong></h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
						<form action="includes/edit.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">
							<input type="hidden" name="foodid" id="foodid">
							<label for="mealadd">Food name:</label>
							<input type="text" class="form-control" name="foodname" id="foodname">
							<label for="mealadd">Food type:</label>
							<input type="text" class="form-control" name="foodtype" id="foodtype">
							<label for="mealadd">Food price:</label>
							<input type="text" class="form-control" name="foodprice" id="foodprice">
							<label for="mealadd">Image:</label>
							<input type="file" class="form-control" name="foodimage">
							<label for="mealadd">Description:</label><br>
							<textarea rows="5" columns="10" name="fooddesc" id="fooddesc"></textarea>
						</div>

					<div class="form-group modal-footer">
						<input class="btn btn-success" type="submit" name="update" value="Update">
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>



			<div class="col-xs-12 container">
				<?php
				$per_page = isset($_POST["limit-records"]) ? $_POST["limit-records"] :5;
							if (isset($_GET['page'])) {
							
							$page = $_GET['page'];
							}else{
							$page = "";
							}

							if ($page == "" || $page == 1){
							$page_1  = 0;
							}else{
							$page_1 = ($page * $per_page) - $per_page;
						}
				?>

				<?php 
					if(!$connect){
							die("Database connection failed!!");
							}else{
							$query_count = "SELECT * FROM menu";
							$find_count = mysqli_query($connect,$query_count);
							$count = mysqli_num_rows($find_count);

							$number_of_pages = ceil($count/$per_page);
							}
				?>

				<h4 class="text-center"><strong>MENU</strong></h4>
				<table class="table table-bordered table-hover table-sm table-responsive-sm table-responsive-md table-responsive-lg">
					<thead class="thead-light">
						<tr>
							<th>#</th>
							<th>NAME OF FOOD</th>
							<th>TYPE OF FOOD</th>
							<th>PRICE</th>
							<th>IMAGES</th>
							<th>DESCRIPTION</th>
						</tr>
					</thead>
					<tbody>
							<?php
								$query = "SELECT * FROM menu LIMIT $page_1 , $per_page";
								$menutable = mysqli_query($connect,$query);

								if(!$menutable){
									die("Query Failed" . mysql_error());
								}else{
									while ($row = mysqli_fetch_assoc($menutable)){
										$id = $row['FOOD_ID'];
										$name = $row['NAME_OF_FOOD'];
										$category = strtolower($row['CAT_OF_FOOD']);
										$price = $row['PRICE'];
										$image = $row['IMAGES'];
										$desc = $row['DESCRIPTION'];

										echo "<tr>";
										echo "<td>{$id}</td>";
										echo "<td>{$name}</td>";
										echo "<td>{$category}</td>";
										echo "<td>{$price}</td>";
										echo "<td><img src='images/$image' width='50' height='50' style='align:center;'></td>";
										echo "<td>{$desc}</td>";
										echo "<td><button type='button' class='btn btn-danger text-white'><a href='meals_menu.php?delete={$id}' style='color:#fff;text-decoration:none;'>Delete</a></button></td>";
										echo "<td><button type='button' class='btn btn-success editbtn'>Edit</button></td>";
										echo "</tr>";
									}
								}
							?> 

						<?php // Delete data from database
							if(!$connect){
								die("Database connection failed!!");
							}else{
								if (isset($_GET['delete'])) {
								$id = $_GET['delete'];

								$query = "DELETE FROM menu WHERE FOOD_ID = {$id}";
								$delete_query = mysqli_query($connect,$query);
							}

							}
						?>
					</tbody>
				</table>
				<nav arial-label="Page navigation">
					<ul class="pagination">
						<li>
							<a href="#" arial-label="Previous">
								<span aria-hidden="true">&laquo;Previous</span>
							</a>
						</li>
						<?php
							for($i = 1; $i <= $number_of_pages; $i++){
								echo "<li><a href='meals_menu.php?page={$i}'>{$i}</a></li>";
							}
						?>
						
						<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">Next&raquo;</span>
						</a>
					</li>
					</ul>
				</nav>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#foodadd">Add Item</button> 
			</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

			<script type="text/javascript">
				$(document).ready(function(){
					$('.editbtn').on('click', function(){

						$('#foodedit').modal('show');

						$tr = $(this).closest('tr');

						var data = $tr.children("td").map(function(){
							return $(this).text();
						}).get();

						console.log(data);
						$('#foodid').val(data[0]);
						$('#foodname').val(data[1]);
						$('#foodtype').val(data[2]);
						$('#foodprice').val(data[3]);
						$('#fooddesc').val(data[5]);
				
					});
				});
			</script>
  