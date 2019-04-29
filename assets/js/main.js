/**
 * @author Legibra
 *
 * 
 * Website integration scripts
 */
    // Add event handler for the form  
    document.getElementById('issueInputForm').addEventListener('submit', saveIssue); 

    function saveIssue(event){

        // Fetch data from form
        var issueDesc       = document.getElementById('issueDescInput').value; 
        var issueSeverity   = document.getElementById('issueSeverityInput').value; 
        var issueAssignedTo = document.getElementById('issueAssignedToInput').value;  
        var issueStatus     = "Open"; 

        // Convert to an object 
        var issue = {
            description: issueDesc, 
            severity: issueSeverity, 
            assignedTo: issueAssignedTo, 
            status: issueStatus
        }

        // Check if it exists 
        if (localStorage.getItem('issues') == null) {
            var issues = []; 
            issues.push(issue); 
            localStorage.setItem('issues', JSON.stringify(issues)); 
        } else {
            var issues = JSON.parse(localStorage.getItem('issues')); 
            issues.push(issue);     
            localStorage.setItem('issues', JSON.stringify(issues));        
        }

        // Reset form elements 
        document.getElementById('issueInputForm').reset(); 
        fetchIssues(); 
        event.preventDefault(); 
    }

    // Fetch issues function 
    function fetchIssues() {
        var issues          = JSON.parse(localStorage.getItem('issues'));
        var issuesListed    = document.getElementById('issuesListed');
        
        // Loop
        for (var i = 1; i < issues.length; i++) {

            // Initialize variables 
            var desc        = issues[i].description; 
            var severity    = issues[i].severity; 
            var assignedto  = issues[i].assignedTo; 
            var status      = issues[i].status;
            var issueNo     = i; 
            
            document.getElementById('desc').innerHTML +=    "<tr>" + 
                                                                "<td scope='row'>" + issueNo + "</td>" +
                                                                "<td>" + desc + "</td>" +
                                                                "<td>" + severity + "</td>" +
                                                                "<td>" + assignedto + "</td>" +
                                                                "<td><span class='badge badge-pill badge-success'>" + status + "</span></td>" +
                                                            "</tr>"; 

            
        }
    }
