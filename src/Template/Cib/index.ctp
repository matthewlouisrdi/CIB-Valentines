<canvas></canvas>
<div id="wrapper">
    <div id="sidebar-wrapper">
    	<div class="row">
    		<div class="col-sm-4 zero-padding">
          <?php echo $this->Form->button(__("<i class='fa fa-newspaper-o'></i>"), ['class' => 'btn btn-block btn-sidebar-panel', 'id' => 'btnfeed']);?>
			  </div>
    		<div class="col-sm-4 zero-padding">
				  <?php echo $this->Form->button(__("<i class='fa fa-exclamation-triangle'></i>"), ['class' => 'btn btn-block btn-sidebar-panel', 'id' => 'btnnotif']);?>
			   </div>
    		<div class="col-sm-4 zero-padding">
				 <?php echo $this->Form->button(__("<i class='fa fa-envelope'></i>"), ['class' => 'btn btn-block btn-sidebar-panel', 'id' => 'btnmess']);?>
			  </div>
    	</div>
    	<div id="feed">
			<div class="jumbotron holiday-panel">
                <div class="col-sm-12">
                	<i class="fa fa-bullhorn fa-3x pull-left" aria-hidden="true"></i><h5 class="tx-bold"> Holidays for January ~ February 2018</h5>
	                <div class="col-sm-12 zero-padding">
						            <strong class="tx-italic">Holiday Title: </strong>
                        New Year&#039;s Day
                    </div>
                    <div class="col-sm-12 zero-padding">
                        <strong class="tx-italic">Start Date: </strong>
                        January 01, 2018
                    </div>
                    <div class="col-sm-12 zero-padding">
                        <strong class="tx-italic">Holiday Title: </strong>
                        Australia Day (QLD)
                    </div>
                    <div class="col-sm-12 zero-padding">
                        <strong class="tx-italic">Start Date: </strong>
                        January 26, 2018
                    </div>
                    <div class="col-sm-12 zero-padding">
                        <strong class="tx-italic">Holiday Title: </strong>
                        Feast Of Our Lady Of Lourdes
                    </div>
                    <div class="col-sm-12 zero-padding">
                        <strong class="tx-italic">Start Date: </strong>
                        February 11, 2018
                    </div>
                    <div class="col-sm-12 zero-padding">
                        <strong class="tx-italic">Holiday Title: </strong>
                        People Power Anniversary
                    </div>
                    <div class="col-sm-12 zero-padding">
                        <strong class="tx-italic">Start Date: </strong>
                        February 25, 2018
                    </div>
					<div class="col-sm-12 text-right zero-padding holiday-panel-link">
                		<span class="holiday-panel-text-title"><?= $this->Html->link(__("See All Holidays <i class='fa fa-arrow-right'></i>"), ['action' => ''], ['escape' => false]);?></span>
            		</div>
                </div>
			</div>
			<h4 class="modal-title"><i class="fa fa-newspaper-o fa-2x pull-left" aria-hidden="true"></i><strong class="news-header">Newsfeed</strong></h4>
      <div class="jumbotron newsfeed-panel">
        <div class="col-sm-12">
          <h5>[Important] DTR Report 01-15 Jan 2018 Lock in</h5>
          <p>Please make sure to review your timesheet <b><u>TODAY</u></b> since <b><u>Monday, 15 Jan 2018</u></b>, is our <b><u>LOCK-IN</u></b> day. Any applicable Staff Central (CIB) request should be filed accordingly<br><br>
          DTR Report will be closed on Tuesday, 16 Jan 2018 at 08:00 am.</p>
          <p>Additional notes:</p>
          <p><span class="tx-blue"><b>Planned Leave date</b></span> - Date will be highlighted in <span class="tx-blue"><b>blue</b></span> on the timesheet.</p>
          <p><b>*Earned Holiday</b> - Offset Date/Earned holiday will be marked with an asterisk <b>(*)</b>.</p>
          <p><b>— Jennica Santos</b></p>
          <h6><strong>Date: 2015-03-11 17:02:24</strong></h6>
        </div>
      </div>       
			<div class="jumbotron newsfeed-panel">
				<div class="col-sm-12">
					SMS Attendance notification format: HR Username Team Champ Reason send to 09062444580 (New Globe) and/or 09086183530 (Smart) — <b>Jennica Santos</b>
					<h6><strong>Date: 2015-03-11 17:02:24</strong></h6>
				</div>
			</div>
		</div>
    	<div class="notif" id="notif">
    		<div><br><br>
				<h4 class="notif-title"><i class="fa fa-bell" aria-hidden="true"></i> Notifications</strong></h4>
				<h6 class="clear-notif"><strong><?= $this->Html->link(__("Clear Notifications"), ['action' => ''], ['escape' => false]);?></strong></h6><hr>
			</div>
		</div>
    	<div class="mess" id="mess">
			<h4 class="modal-title">Cloudstaff Messaging</h4><br>
		</div>
    </div>
</div>
<div id="wrapper">
	<nav class="navbar navbar-expand-md bg-dark in-out-nav">
    <?php
    echo $this->Html->link(
    $this->Html->image("staffCentralLogo.png", ["class" => "sc-logo"]),
    "Cib/valentine",
    ['escape' => false, 'class' => 'navbar-brand']
    );
    ?>
    <?php echo $this->Form->button(__("<i class='fa fa-bars'></i>"), ['class' => 'navbar-toggler', 'type' => 'button', 'data-toggle' => 'collapse', 'data-target' => '#collapsibleNavbar']);?>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item in-out-nav-item">
          <?= $this->Html->link(__("<i class='fa fa-sign-out'></i>"), ['action' => ''], ['escape' => false], ['class' => 'nav-link tc-white']);?>
				</li>
			</ul>
		</div>
	</nav>
    <div class="col-sm-12 text-right home-div normal-class01">
        <h5><?= $this->Html->link(__("<i class='fa fa-home'></i> Home"), ['action' => ''], ['escape' => false]);?></h5>
    </div>
    <div class="col-sm-12 content-div">
    	<div class="row">
        	<div class="col-sm-6 text-right normal-class01">
        		<?php echo $this->Html->image('employeePicture.png', ['class' => 'rounded-circle emp-pic']);?>
				<h2>Di, Matthew Louis <?= $this->Html->link(__("<i class='fa fa-list-alt'></i>"), ['action' => ''], ['escape' => false]);?></h2>
				<h4><i class="fa fa-briefcase"></i> Associate Software Engineer OJT</h4>
				<h5>Shift: 07:00 to 16:00 PH Timezone</h5>
        	</div>
        	<div class="col-sm-6 status-div normal-class02">
            <?php echo $this->Form->button(__("<span class='change-status'><i class='fa fa-refresh'></i> Click to change status</span>"), ['class' => 'change-curr-status', 'id' => 'changeLogLink', 'rel' => 'Out', 'isLocked' => 'yes']);?>
        		<div class="stepwizard">
        			<div class="stepwizard-row">
        				<div class="stepwizard-step">
        					<?php echo $this->Form->button(__(""), ['class' => 'btn btn-circle btn-default', 'disabled' => 'disabled']);?><p>IN</p>
        				</div>
        				<div class="stepwizard-step">
        					<?php echo $this->Form->button(__(""), ['class' => 'btn btn-circle btn-default', 'disabled' => 'disabled']);?><p>OTL</p>
        				</div>
        				<div class="stepwizard-step">
        					<?php echo $this->Form->button(__(""), ['class' => 'btn btn-circle btn-info', 'disabled' => 'disabled']);?><p>BFL</p>
        				</div>
        				<div class="stepwizard-step">
                  <?php echo $this->Form->button(__(""), ['class' => 'btn btn-circle btn-default', 'disabled' => 'disabled']);?><p>OUT</p>
        				</div>
        			</div>
        		</div>
        		<p>Current Log - BackFromLunch<br>10-Jan-2018 12:32</p>
        	</div>
        </div>
    </div>
    <div class="col-sm-12 text-center lock-in">
    	<i class="fa fa-lg fa-clock-o"></i> Lock in your timesheet for <?= $this->Html->link(__("December 16-31, 2017"), ['action' => ''], ['escape' => false]);?> cutoff.
    </div>
