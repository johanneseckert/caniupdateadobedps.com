<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: false
files: false
fields:
	status: 
		label: Status
		type:  text
	alert: 
		label: Important alert
		type:  textarea
		help: Is shown as a breaker element on page top, should contain a link
	rss_update:
		label: RSS update
		type: textarea
		help: will be subject of RSS entry
	dps_sprint:
		label: DPS Version
		type: text
	dps_date:
		label: DPS Release Date
		type: date
		format: dd.mm.yy

# folio builder panel
	panel_version:
		label: FOLIO BUILDER PANEL
		type: text
	panel_status:
		label: Status
		type: radio
		options:
			green:  green (everything is fine)
			yellow: yellow (some issues, nothing critical)
			red:  red (better don't update or use)
		default: green
	panel_info:
		label: Information
		type: textarea
		size: large
	panel_hint:
		label: Hint
		type: textarea


# folio producer tools 
	producer_version:
		label: FOLIO PRODUCER TOOLS
		type: text
	producer_status:
		label: Status
		type: radio
		options:
			green:  green (everything is fine)
			yellow: yellow (some issues, nothing critical)
			red:  red (better don't update or use)
		default: green
	producer_info:
		label: Information
		type: textarea
		size: large
	producer_hint:
		label: Hint
		type: textarea


# viewer builder
	viewerbuilder_version:
		label: VIEWER BUILDER
		type: text
	viewerbuilder_status:
		label: Status
		type: radio
		options:
			green:  green (everything is fine)
			yellow: yellow (some issues, nothing critical)
			red:  red (better don't update or use)
		default: green
	viewerbuilder_info:
		label: Information
		type: textarea
		size: large
	viewerbuilder_hint:
		label: Hint
		type: textarea



# Adobe Content Viewer
	viewer_version:
		label: ADOBE CONTENT VIEWER VERSION
		type: text
	viewer_status:
		label: Status
		type: radio
		options:
			green:  green (everything is fine)
			yellow: yellow (some issues, nothing critical)
			red:  red (better don't update or use)
		default: green
	viewer_info:
		label: Information
		type: textarea
		size: large
	viewer_hint:
		label: Hint
		type: textarea

