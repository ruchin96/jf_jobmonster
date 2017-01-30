<?php
$this->title = 'Manage Plan';

echo $this->render('company_header',['sel_company' => $sel_company]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="member-plan">
					<p class="no-plan-package text-center">No Package</p>
					<div class="member-plan-choose">
						<a class="btn btn-lg btn-primary" href="packages.html">Choose a Package</a>
					</div>
				</div>
			</div>  
		</div> 
	</div> 
</div>