<?php snippet('header') ?>

	<!-- Get the one article in category dps
	================================================== -->
<?php
	$data = $pages->find('dps');
?>

	<div class="container">
		<header class="sixteen columns">
			<h1 id="title"><?php echo $data->status() ?></h1>
		</header>
		<div class="eight columns" id="intro">
			<p>Adobe released <a href="http://www.adobe.com/products/digital-publishing-suite-family.html">Digital Publishing Suite</a> <strong>Version <?php echo $data->dps_sprint() ?></strong> on <?php echo $data->dps_date() ?>, introducing <a href="http://help.adobe.com/en_US/digitalpubsuite/using/WS67cb9e293e2f1f60-21ba9a4512e5e5e0b8d-8000.html">lots of new features</a>.
				You should be careful when updating to the newest tools and test intensively. Before using DPS for work on tight deadlines, check this site or <a href="<?php echo url('dps/feed') ?>" class="feed">subscribe to the feed</a>.</p>
		</div>
		<div class="four columns">
			<p><a href="http://help.adobe.com/en_US/digitalpubsuite/using/WS67cb9e293e2f1f60-21ba9a4512e5e5e0b8d-8000.html">What's new in this release</a><br />
			<a href="http://helpx.adobe.com/digital-publishing-suite/release-note/dps-bug-fix-release-notes.html">Bug Fix Release Notes</a></p>
			<p><a href="http://forums.adobe.com/community/dps">Adobe's User Forum for DPS</a></p>
		</div>
		<div class="four columns" id="downloads">
			<a href="http://digitalpublishing.acrobat.com" class="full-width button">Download DPS v<?php echo $data->dps_sprint() ?></a>
			<p class="small"><a href="http://help.adobe.com/en_US/digitalpubsuite/using/WS67cb9e293e2f1f60-21ba9a4512e5e5e0b8d-7ffe.html">How to install older versions</a></p>
		</div>

		<div class="sixteen columns">
			<?php if ($data->alert() != "") { ?>
			<p id="alert">
				<?php echo $data->alert() ?>
			</p>
			<?php } ?>
			<?php if ($data->rss_update() != "") { ?>
			<p id="update">
				<span class="sc">update</span> <span class="date"><?php echo date("F, jS", filemtime("content/dps/dps.txt")); ?></span> <?php echo $data->rss_update() ?>
			</p>			
			<?php } ?>
		</div>

		<div class="row" id="sections">
			<div class="four columns section omega">
				<h2 class="topleft">Folio Builder Panel</h2>
				<div class="details">
					<h3>Version <span class="version"><?php echo $data->panel_version() ?></span> <span class="infobtn">where?</span></h3>
					<div class="four columns alpha omega version_screenshot">
						<p class="innerspacing remove-bottom">
						Find the version number in the info window of the Folio Builder Panel.
						</p>
						<img src="<?php echo url('assets/images/screenshot-panel.png') ?>" alt="" class="scale-with-grid" />
					</div>
					<div class="status <?php echo $data->panel_status() ?>"><?php echo $data->panel_info() ?></div>
					<?php if ($data->panel_hint() != "") { ?>
					<div class="hint"><b>Note</b> <?php echo $data->panel_hint() ?></div>
					<?php } ?>
				</div>
			</div>
			<div class="four columns section alpha omega">
				<h2>Folio Producer Tools</h2>
				<div class="details">
					<h3>Version <span class="version"><?php echo $data->producer_version() ?></span> <span class="infobtn">where?</span></h3>
					<div class="four columns alpha omega version_screenshot">
						<p class="innerspacing remove-bottom">
						Find the version number in the info window of the Folio Builder Panel.
						</p>
						<img src="<?php echo url('assets/images/screenshot-producer.png') ?>" alt="" class="scale-with-grid" />
					</div>
					<div class="status <?php echo $data->producer_status() ?>"><?php echo $data->producer_info() ?></div>
					<?php if ($data->producer_hint() != "") { ?>
					<div class="hint"><b>Note</b> <?php echo $data->producer_hint() ?></div>
					<?php } ?>
				</div>
			</div>
			<div class="four columns section alpha omega">
				<h2>Viewer Builder</h2>
				<div class="details">
					<h3>Version <span class="version"><?php echo $data->viewerbuilder_version() ?></span> <span class="infobtn">where?</span></h3>
					<div class="four columns alpha omega version_screenshot">
						<p class="innerspacing remove-bottom">
						Check the about dialog.
						</p>
						<img src="<?php echo url('assets/images/screenshot-vb.png') ?>" alt="" class="scale-with-grid" />
					</div>
					<div class="status <?php echo $data->viewerbuilder_status() ?>"><?php echo $data->viewerbuilder_info() ?></div>
					<?php if ($data->viewerbuilder_hint() != "") { ?>
					<div class="hint"><b>Note</b> <?php echo $data->viewerbuilder_hint() ?></div>
					<?php } ?>
				</div>
			</div>
			<div class="four columns section alpha omega">
				<h2 class="topright">Adobe Content Viewer</h2>
				<div class="details last">
					<h3>Version <span class="version"><?php echo $data->viewer_version() ?></span> <span class="infobtn">where?</span></h3>
					<div class="four columns alpha omega version_screenshot">
						<p class="innerspacing remove-bottom">
						Open a folio and double-tap the menu bar.
						</p>
						<img src="<?php echo url('assets/images/screenshot-viewer.png') ?>" alt="" class="scale-with-grid" />
					</div>
					<div class="status <?php echo $data->viewer_status() ?>"><?php echo $data->viewer_info() ?></div>
					<?php if ($data->viewer_hint() != "") { ?>
					<div class="hint"><b>Note</b> <?php echo $data->viewer_hint() ?></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div><!-- container -->

<?php snippet('footer') ?>