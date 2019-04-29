
    <!-- Header  -->
    <?php 
        require('partials/header.php'); 
    ?>  

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <h4>JS Issue Tracker</h4>

                <div class="jumbotron">
                   <h5>Add New Issue</h5>

                   <!-- Form  -->
                   <form id="issueInputForm" action="">
                       <div class="form-group">
                         <label for="">Issues Description</label>
                         <textarea class="form-control" name="" id="issueDescInput" rows="3"></textarea>
                       </div>

                       <div class="form-group">
                         <label for="">Severity</label>
                         <select class="form-control" name="" id="issueSeverityInput">
                           <option>Low</option>
                           <option>Medium</option>
                           <option>High</option>
                         </select>
                       </div>

                       <div class="form-group">
                         <label for="">Assigned to</label>
                         <input type="text" class="form-control" name="" id="issueAssignedToInput" aria-describedby="helpId" placeholder="">
                       </div>

                       <button type="submit" class="btn btn-primary">Submit</button>

                       <p id="helpText"></p>
                   </form>
                </div>

                <!-- List issues  -->
                <div class="col-md-12">
                    <div id="listIssues">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>issue</th>
                                    <th>desc</th>
                                    <th>assigned to</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody id="desc">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
        

    <!-- Footer  -->
    <?php 
        require('partials/footer.php'); 
    ?> 