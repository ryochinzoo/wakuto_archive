<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/06pageheader.png" />
	<div class="page_headline">
		募集要項
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>募集要項
	</div>
	<div class="pageContentsWrapper">
		<div class="control_buttons_recruit_single">
			<div class="page_buttons_wrapper">
				<div class="buttons_leftside_single">
					<div class="page_button">
						<a href="<?php echo home_url('/recruit/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06single_backbtn.png" /></a>
					</div>
				</div>
				<div class="buttons_rightside_single">
					<div class="page_button">
						<a href="<?php echo home_url('/fukuri/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06single-Welfare-btn.png" /></a>
					</div>
				</div>
			</div>
		</div>
		<div class="recruit_detail_contents">
			<div class="recruit_detail_title">
				<?php the_title() ?>
			</div>
			<?php 
				$application_details = SCF::get('recruit_group');
		  
				foreach ($application_details as $application_detail) {
					if($application_detail['recruit_title'] !== "" && $application_detail['details'] !== ""){
			?>
			<div class="recruit_detail_skills">
				<div class="recruit_detail_skills_title">
					<?php echo $application_detail['recruit_title']; ?>
				</div>
				<div class="recruit_detail_skills_contents">
					<?php echo $application_detail['details']; ?>
				</div>
			</div>
			<?php
				   }
			   }
			?>
			<div class="recruit_detail_table">
				<div class="recruit_detail_table_title">
					応募概要
				</div>
				<div class="recruit_detail_table_contents">
					<table cellspacing="10">
						<?php if(get_field('target_bool')): ?>
						<tr>
							<th>募集対象</th>
							<td>
								<?php the_field('condition') ?>
							</td>
						</tr>
						<?php endif; ?>
						<tr>
							<th>給与</th>
							<td>
								<?php the_field('salary') ?>
							</td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td>
								<?php the_field('work_location') ?>
							</td>
						</tr>
						<tr>
							<th>雇用形態</th>
							<td>
								<?php the_field('contract_type') ?>
							</td>
						</tr>
						<tr>
							<th>勤務時間</th>
							<td>
								<?php the_field('work_style') ?>
							</td>
						</tr>
						<tr>
							<th><span class="whiteSpaceNoWrap">休日・</span><span class="whiteSpaceNoWrap">休暇</span></th>
							<td>
								<?php the_field('holiday') ?>
							</td>
						</tr>
						<tr>
							<th><span class="whiteSpaceNoWrap">その他・</span><span class="whiteSpaceNoWrap">福利厚生</span></th>
							<td>
								<?php the_field('other_fukuri') ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<?php if(get_field('recruit_process')): ?>
			<div class="recruit_detail_process">
				<div class="recruit_detail_process_title">
					● 選考プロセス
				</div>
				<div class="recruit_detail_process_img">
					<img src="<?php the_field('recruit_process') ?>" />
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>