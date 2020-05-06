<!DOCTYPE html>
<html lang="en">
	<head></head>
	<body>
	<div id="data-analysis">
	<h2>Hospital Inpatient Prospective Payment System (IPPS) Charge Analysis Software – A CT310 Class Project</h2>

<h3>Milestone 1</h3>
<p>Hospitals are often reimbursed by Medicaid for a procedure at a rate much less than the hospital bills and, sometimes, less than it costs the hospital to provide the care to the patient.  For this software, we will analyze these data by Provider and MS-DRG to provide insight into hospital reimbursement.</p>
<h3>The Data</h3>
<p>We will use the FY2017 data from the Center for Medicare and Medicaid Services (CMS) IPPS files.  These files contain various columns, including columns that identify the Provider, the MS-DRG, and the Payment Details.  These three categories will work together to view the data from different perspectives.</p>
<h3>Pages in the System</h3>
<h4>Home Page</h4>
<p>You will come up with a company name and logo and create a home page.  This page will have navigation to other pages but will not contain any data or reports.  While you must create your own logo, you can use any properly cited image in your site to make it look professional.</p>
<h4>About Us/Who We Our/Our Team</h4>
<p>On this page, you will have a picture, name, and bio for each of your team members along with a link to their deployment of the entire site.  (Yes, you each must host a fully working copy of the application on the due date)</p>
<h4>Hospital List</h4>
<p>Simple a list of each hospital.  Must include Hospital Name, State, and MPN (Medicare’s 6-digit provider ID number, with leading zeros if needed).  This page uses a jQuery Tablesorter to allow a user to sort or filter by Name, MPN, State, and any other reasonable column that you included.</p>
<p>Clicking on a hospital’s name takes the user to a page for that hospital</p>
<h4>RG List</h4>
<p>Similar to the Hospital List page, except this page lists the MS-DRG Number and Description of each MS-DRG that has data in the dataset.  It can be filtered and sorted by either of these columns.</p>
<p>Clicking on a DRG Number takes the user to a page for that DRG</p>
<h4>Hospital Details Page</h4>
<p>This is one Controller/Action that, when given a 6-digit MPN, shows a detailed report for the chosen hospital, including the rest of the details about that hospital (Such as address) that appear in the data set.  Also shown is a table for each DRG which has DRG Number, DRG Description, and the three payment amount columns.</p>
<p>Clicking on a DRG Number takes the user to a page for that DRG</p>
<h4>DRG Details Page</h4>
<p>This page shows details for a given DRG and has a table with each Hospital, including the MPN, Name, and State along with the three payment amount columns.</p>
<h3>Implementation Details</h3>
<p>Application makes extensive use of Fuel PHP</p>
<p>The application is entirely MVC in Fuel PHP, no static pages.  Pages use templates for navigation and other common elements and are designed and implemented to be as generic as possible.</p>
<p>It is up to the group how the different pages are broken up into controllers and actions, provided the actions are parameterized for MPN and DRG for the respective detail pages.</p>
<p>The application will use no fewer than 3 models, Hospital, DRG, and Payment, which will read the respective data using the fuel model search commands.  At this stage, the models will read from a one or more files.  </p>
<h3>Team Dynamics</h3>
<p>Teams are expected to work together to complete the assignment for a Team Score.  However, the instructor reserves the right to assign a different score to each team member, if warranted.  Teams facing team dynamics issues are expected to contact the instructor as soon as these issues being and keep in contact about them.  </p>
<h3>Team Assignment</h3>
<h4>Team Composition</h4>
<p>A team is composed of 1-4 members.  Teams are formed by the students.  The project is designed to be a decent amount of work and will be challenging for teams of 1 or 2, yet teams of 4 might find a different challenge is coordinating team logistics.</p>
<p>Students will form their teams in the groups section of Canvas.  Student can add themselves to a team or to one of the special groups to be randomly paired or to request to work alone.  Students requesting to work alone must present their case to the instructor about why they desire to work alone and must commit to essentially a double workload for the remainder of the semester.  This request will be granted at the discretion of the instructor.  Otherwise, any students not on a team will be randomly assigned to form new teams.</p>
<h3>Milestone 2</h3>
<ul>
	<li>Database backend is now required.</li>
	<li>Database should start with 3 tables, hospitals, drgs, and a many-to-many linking table that links these and includes the financial data.</li>
	<li>Users and Logins</li>
	<ul>
		<li>Users can now log in.  There are regular users and admin users.</li>
		<li>There must be a user account, username "ct310" with password "cookiesareyummy"</li>
		<li>There must be an admin account, username "ct310admin" with password "RoundPiesAreBest"</li>
	</ul>
	<li>Table Pagination</li>
	<ul>
	<li>On the Hospital and DRG details pages, the tables are now paginated to show 20 entries at a time.</li>
	</ul>
	<li>Reddit-style comments</li>
	<ul>
	<li>On the Hospital Detail Page, below the paginated table, allow users to post "reddit-style" comments.  This includes:</li>
	
	<ul>
		<li>Can create a top-level comment.</li>
		<li>Can reply to an existing comment.</li>
		<li>Can upvote/downvote a comment (show the comment's current score by it)</li>
		<li>A user can edit their own comments.  Admins can edit any comment.</li>
		<li>A user can delete their own comment, Admins can delete any comment.</li>
		<li>A comment without replies is completely deleted</li>
		<li>A comment with replies is replaced with "[deleted]" and is no longer editable or deletable</li>
		<li>Deleted comments no longer display the user name</li>
		<li>Comments display:</li>
		<ul>
			<li>date/time originally created</li>
			<li>date/time last edited (if any)</li>
			<li>Username of the user who created the comment</li>
		</ul></ul>
	</ul>
</ul>	
	</div>
	</body>
</html>