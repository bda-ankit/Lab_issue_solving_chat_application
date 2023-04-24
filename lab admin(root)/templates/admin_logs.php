<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Admin Log Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Loging date</th>
                                                <th>Loging time</th>
                                                <th>Actions</th>
												
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from admin_logs;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{
													$admin_id = $res["admin_id"];

													$stu1="Select * from admin_details where admin_id = '$admin_id';";
													$qry1=$conn->query($stu1);
													$res1=$qry1->fetch_assoc();
													$admin_name = $res1["admin_fname"];



													
											
													

												
                                            	?>
                                        <tbody>
                                            <tr>
                                                
                                                <td><?php echo $admin_name;?></td>
                                                <td><?php echo $res["admin_loging_date"]; ?></td>
												<td><?php echo $res["admin_loging_time"]; }?></td>						
												
                                                
												
												</tr>
                                        </tbody>
                                    </table>
									                              
                                </div>
                            </div>

						

<?php
include("footer.php");
?>