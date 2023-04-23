<?php include'db_connect.php' ?>

<?php
require_once('./operations.php');
?>

<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
            
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_project"><i class="fa fa-plus"></i> Add New project</a>
			</div>
            
		</div>
		

		<!DOCTYPE html>

<style>
* {
  box-sizing: border-box;
}

.row11 {
  display: flex;
  margin-left:-5px;
  margin-right:-5px;
}

.column11 {
  flex: 50%;
  padding: 5px;
}

.column12 {
  flex: 50%;
  
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<body>
  <div class="container d-flex justify-content-center">
    <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">

      <?php inputFields("Employer name","username","","text") ?>
      <?php inputFields("Number","mobile","","text") ?>
      <?php inputFields("position","position","","text") ?>
      <?php inputFields("Team Name","teamname","","text") ?>
      <?php inputFields("Country","country","","text") ?>
      <?php inputFields("Description","description","","text") ?>
      <?php inputFields("Feedback","feedback","","text") ?>
      <?php inputFields("","file","","file") ?>
      <button class="btn btn-dark" type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>

<div class="row11 mb-5 mt-5">
  <div class="column11">
    <table>
      <tr>
        <th>Employee Name</th>
        <th>Employee Number</th>
        <th>Position</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>50</td>
        <td>Team Lead</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>94</td>
        <td>Project Manager</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>67</td>
        <td>Intern</td>
      </tr>
    </table>
  </div>
  <div class="column11">
    <table>
      <tr>
        <th>Date</th>
        <th>Team Name</th>
        <th>Country</th>
      </tr>
      <tr>
        <td>22-03-2023</td>
        <td>Red Rangers</td>
        <td>India</td>
      </tr>
      <tr>
        <td>22-03-2023</td>
        <td>Hall of Flames</td>
        <td>India</td>
      </tr>
      <tr>
        <td>22-03-2023</td>
        <td>The Boys</td>
        <td>Pakistan</td>
      </tr>
    </table>


  </div>
</div>


<table>
  <tr>
    <th style="width:5%;text-align: center">S.No</th>
    <th style="width:15%">Started Time</th>
    <th style="width:15%">Ended Time</th>
	<th style="width:50%;text-align: center;">Activity Description</th>
    <th style="width:10%">Remarks</th>
	<th style="width:5%">Value (High,Medium,Low,None)</th>
  </tr>
  <tr>
    <td>1</td>
    <td>22-03-2023,9.00</td>
    <td>22-06-2023,9.00</td>
	<td style="text-align: center;">The Edgy module gives you the ability to switch between edge to edge and normal designs.</td>
    <td>50</td>
	<td>50</td>
  </tr>
  <tr>
    <td>2</td>
    <td>22-03-2023,9.00</td>
    <td>22-06-2023,9.00</td>
	<td style="text-align: center;">The Edgy module gives you the ability to switch between edge to edge and normal designs.</td>
    <td>50</td>
	<td>50</td>
  </tr>
  <tr>
    <td>3</td>
    <td>22-03-2023,9.00</td>
    <td>22-06-2023,9.00</td>
	<td style="text-align: center;">Smith</td>
    <td>50</td>
	<td>50</td>
  </tr>
  <tr>
    <td>4</td>
    <td>22-03-2023,9.00</td>
    <td>22-06-2023,9.00</td>
	<td style="text-align: center;">The Edgy module gives you the ability to switch between edge to edge and normal designs.</td>
    <td>50</td>
	<td>50</td>
  </tr>
  <tr>
    <td>5</td>
    <td>22-03-2023,9.00</td>
    <td>22-06-2023,9.00</td>
	<td style="text-align: center;">The Edgy module gives you the ability to switch between edge to edge and normal designs.</td>
    <td>50</td>
	<td>50</td>
  </tr>
  <tr>
    <td>6</td>
    <td>22-03-2023,9.00</td>
    <td>22-06-2023,9.00</td>
	<td style="text-align: center;">The Edgy module gives you the ability to switch between edge to edge and normal designs.</td>
    <td>50</td>
	<td>50</td>
  </tr>
</table>



<div class="row11 mt-5">
  <div class="column12">
    <table>
      <tr>
        <th style="text-align: center;">Checked by Hr Associate</th>
        
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
      </tr>
    </table>
  </div>
  <div class="column12">
    <table>
      <tr>
	  <th style="width:100%">Checked by (Senior Hr Associate)</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
      </tr>
    </table>
  </div>
  <div class="column12">
    <table>
      <tr>
	  <th style="text-align: center;">Approved (Section Manager)</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
      </tr>
    </table>
  </div>
</div>










	</div>
</div>
<style>
	table p{
		margin: unset !important;
	}
	table td{
		vertical-align: middle !important
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	
	$('.delete_project').click(function(){
	_conf("Are you sure to delete this project?","delete_project",[$(this).attr('data-id')])
	})
	})
	function delete_project($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_project',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>