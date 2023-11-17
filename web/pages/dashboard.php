 <!-- Modal -->
 <div class="modal" id="myModal">
            <div class="addticketPanel">
                <div class="addticketHeader">
                    <span class="close">&times;</span>
                    <h2>Add Ticket</h2>
                </div>
                <div class="formPanel">
                    <h5>Please provide information below:</h5>
                        <form>
                            <label for="subj">Subject:</label><br>
                            <select id="subj" name="subj">
                            <option value="hardware">Hardware</option>
                            <option value="net">Network</option>
                            <option value="soft">Software</option>
                            <option value="soft">Others</option>
                            </select><br><br>
                            <label for="description">Describe the Problem:</label><br>
                            <input type="text" id="description" name="description"><br>
                            <input type="submit" value="Submit">
                        </form>
                </div>
                
            </div>
            
    </div>

         
            <!--Table List-->
                    <div class="panel">
                        <button class="addTicket" id="ticketbutton" >Add Ticket</button>
                       
                            <div class="filterIcon">
                                <i class="fas fa-sort"></i>
                                <i class="fas fa-filter"></i>
                                <i class="fas fa-eye-slash"></i>
                            </div>

                                        <div class="tablePanel">
                                            <table>
                                            
                                                <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Assignee</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td data-label="Date">February 13, 2013</td>
                                                    <td data-label="Subject">Software</td>
                                                    <td data-label="Assignee">Sasuke</td>
                                                    <td data-label="Status">Pending</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row" data-label="Date">February 13, 2013</td>
                                                    <td data-label="Subject">Hardware</td>
                                                    <td data-label="Assignee">Yusuke</td>
                                                    <td data-label="Status">Pending</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row" data-label="Date">February 13, 2013</td>
                                                    <td data-label="Subject">Network</td>
                                                    <td data-label="Assignee">Wendyle</td>
                                                    <td data-label="Status">Solved</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row" data-label="Date">February 13, 2013</td>
                                                    <td data-label="Subject">Network</td>
                                                    <td data-label="Assignee">Wendyle</td>
                                                    <td data-label="Status">Pending</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        
                                        </div>
                    </div>
                <!--End of Table List-->