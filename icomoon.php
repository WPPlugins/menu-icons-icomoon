<?php
/**
 * IcoMoon
 *
 * @package Menu_Icons_Icomoon
 * @author Dzikri Aziz <kvcrvt@gmail.com>
 */


require_once Menu_Icons::get( 'dir' ) . 'includes/type-fonts.php';

/**
 * Icon type: IcoMoon
 */
class Menu_Icons_Type_Icomoon extends Menu_Icons_Type_Fonts {

	/**
	 * Holds icon type
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $type = 'icomoon';

	/**
	 * Holds icon label
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $label = 'IcoMoon';

	/**
	 * Holds icon version
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $version = '20140611';


	/**
	 * Class constructor
	 *
	 * @since 0.1.0
	 * @param array $types Icon Types
	 * @return array
	 */
	public function __construct( Array $args ) {
		$this->stylesheet = $args['stylesheet'];
		parent::__construct();
	}


	/**
	 * Icon Names
	 *
	 * @since  0.1.0
	 * @return array
	 */
	public function get_names() {
		return array(
			array(
				'key'   => 'actions',
				'label' => __( 'Actions', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-plus'             => __( 'Add', 'menu-icons-icomoon' ),
					'icomoon-minus'            => __( 'Remove', 'menu-icons-icomoon' ),
					'icomoon-checkmark'        => __( 'Check', 'menu-icons-icomoon' ),
					'icomoon-checkmark2'       => __( 'Check', 'menu-icons-icomoon' ),
					'icomoon-checkmark-circle' => __( 'Check', 'menu-icons-icomoon' ),
					'icomoon-close'            => __( 'Close', 'menu-icons-icomoon' ),
					'icomoon-cancel-circle'    => __( 'Close', 'menu-icons-icomoon' ),
					'icomoon-download'         => __( 'Download', 'menu-icons-icomoon' ),
					'icomoon-download2'        => __( 'Download', 'menu-icons-icomoon' ),
					'icomoon-download3'        => __( 'Download', 'menu-icons-icomoon' ),
					'icomoon-box-add'          => __( 'Download', 'menu-icons-icomoon' ),
					'icomoon-cloud-download'   => __( 'Cloud Download', 'menu-icons-icomoon' ),
					'icomoon-upload'           => __( 'Upload', 'menu-icons-icomoon' ),
					'icomoon-upload2'          => __( 'Upload', 'menu-icons-icomoon' ),
					'icomoon-upload3'          => __( 'Upload', 'menu-icons-icomoon' ),
					'icomoon-box-remove'       => __( 'Upload', 'menu-icons-icomoon' ),
					'icomoon-cloud-upload'     => __( 'Cloud Upload', 'menu-icons-icomoon' ),
					'icomoon-contract'         => __( 'Contract', 'menu-icons-icomoon' ),
					'icomoon-expand'           => __( 'Expand', 'menu-icons-icomoon' ),
					'icomoon-contract2'        => __( 'Contract', 'menu-icons-icomoon' ),
					'icomoon-expand2'          => __( 'Expand', 'menu-icons-icomoon' ),
					'icomoon-enter'            => __( 'Enter', 'menu-icons-icomoon' ),
					'icomoon-exit'             => __( 'Exit', 'menu-icons-icomoon' ),
					'icomoon-filter'           => __( 'Filter', 'menu-icons-icomoon' ),
					'icomoon-filter2'          => __( 'Filter', 'menu-icons-icomoon' ),
					'icomoon-lock'             => __( 'Lock', 'menu-icons-icomoon' ),
					'icomoon-lock2'            => __( 'Lock', 'menu-icons-icomoon' ),
					'icomoon-unlocked'         => __( 'Unlock', 'menu-icons-icomoon' ),
					'icomoon-newtab'           => __( 'New Tab', 'menu-icons-icomoon' ),
					'icomoon-blocked'          => __( 'Block', 'menu-icons-icomoon' ),
					'icomoon-reply'            => __( 'Back', 'menu-icons-icomoon' ),
					'icomoon-forward'          => __( 'Forward', 'menu-icons-icomoon' ),
					'icomoon-spam'             => __( 'Spam', 'menu-icons-icomoon' ),
					'icomoon-point-up'         => __( 'Point Up', 'menu-icons-icomoon' ),
					'icomoon-point-down'       => __( 'Point Down', 'menu-icons-icomoon' ),
					'icomoon-point-left'       => __( 'Point Left', 'menu-icons-icomoon' ),
					'icomoon-point-right'      => __( 'Point Right', 'menu-icons-icomoon' ),
					'icomoon-search'           => __( 'Search', 'menu-icons-icomoon' ),
					'icomoon-zoomin'           => __( 'Zoom In', 'menu-icons-icomoon' ),
					'icomoon-zoomout'          => __( 'Zoom Out', 'menu-icons-icomoon' ),
					'icomoon-signup'           => __( 'Sign Up', 'menu-icons-icomoon' ),
					'icomoon-thumbs-up'        => __( 'Thumbs Up', 'menu-icons-icomoon' ),
					'icomoon-thumbs-up2'       => __( 'Thumbs Down', 'menu-icons-icomoon' ),
					'icomoon-share'            => __( 'Share', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'arrows',
				'label' => __( 'Arrows', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-arrow-up'          => __( 'Up', 'menu-icons-icomoon' ),
					'icomoon-arrow-down'        => __( 'Down', 'menu-icons-icomoon' ),
					'icomoon-arrow-left'        => __( 'Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-right'       => __( 'Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-up-left'     => __( 'Up Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-up-right'    => __( 'Up Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-down-left'   => __( 'Down Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-down-right'  => __( 'Down Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-up2'         => __( 'Up', 'menu-icons-icomoon' ),
					'icomoon-arrow-down2'       => __( 'Down', 'menu-icons-icomoon' ),
					'icomoon-arrow-left2'       => __( 'Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-right2'      => __( 'Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-up-left2'    => __( 'Up Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-up-right2'   => __( 'Up Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-down-left2'  => __( 'Down Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-down-right2' => __( 'Down Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-up3'         => __( 'Up', 'menu-icons-icomoon' ),
					'icomoon-arrow-down3'       => __( 'Down', 'menu-icons-icomoon' ),
					'icomoon-arrow-left3'       => __( 'Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-right3'      => __( 'Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-up-left3'    => __( 'Up Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-up-right3'   => __( 'Up Right', 'menu-icons-icomoon' ),
					'icomoon-arrow-down-left3'  => __( 'Down Left', 'menu-icons-icomoon' ),
					'icomoon-arrow-down-right3' => __( 'Down Right', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'brands',
				'label' => __( 'Brands', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-android'       => 'Android',
					'icomoon-apple'         => 'Apple',
					'icomoon-blogger'       => 'Blogger',
					'icomoon-blogger2'      => 'Blogger',
					'icomoon-css3'          => __( 'CSS 3', 'menu-icons-icomoon' ),
					'icomoon-delicious'     => 'Delicious',
					'icomoon-deviantart'    => 'deviantART',
					'icomoon-deviantart2'   => 'deviantART',
					'icomoon-dribbble'      => 'Dribbble',
					'icomoon-dribbble2'     => 'Dribbble',
					'icomoon-dribbble3'     => 'Dribbble',
					'icomoon-facebook'      => 'Facebook',
					'icomoon-facebook2'     => 'Facebook',
					'icomoon-facebook3'     => 'Facebook',
					'icomoon-finder'        => __( 'Finder', 'menu-icons-icomoon' ),
					'icomoon-flattr'        => 'Flattr',
					'icomoon-flickr'        => 'Flickr',
					'icomoon-flickr2'       => 'Flickr',
					'icomoon-flickr3'       => 'Flickr',
					'icomoon-flickr4'       => 'Flickr',
					'icomoon-forrst'        => 'forrst',
					'icomoon-forrst2'       => 'forrst',
					'icomoon-foursquare'    => 'Foursquare',
					'icomoon-foursquare2'   => 'Foursquare',
					'icomoon-github'        => 'GitHub',
					'icomoon-github2'       => 'GitHub',
					'icomoon-github3'       => 'GitHub',
					'icomoon-github4'       => 'GitHub',
					'icomoon-github5'       => 'GitHub',
					'icomoon-google'        => 'Google',
					'icomoon-google-drive'  => 'Google Drive',
					'icomoon-googleplus'    => 'Google+',
					'icomoon-googleplus2'   => 'Google+',
					'icomoon-googleplus3'   => 'Google+',
					'icomoon-googleplus4'   => 'Google+',
					'icomoon-html5'         => __( 'HMTL 5', 'menu-icons-icomoon' ),
					'icomoon-html52'        => __( 'HMTL 5', 'menu-icons-icomoon' ),
					'icomoon-IcoMoon'       => 'IcoMoon',
					'icomoon-instagram'     => 'Instagram',
					'icomoon-joomla'        => 'Joomla!',
					'icomoon-lanyrd'        => 'Lanyrd',
					'icomoon-lastfm'        => 'Last.fm',
					'icomoon-lastfm2'       => 'Last.fm',
					'icomoon-linkedin'      => 'LinkedIn',
					'icomoon-paypal'        => 'PayPal',
					'icomoon-paypal2'       => 'PayPal',
					'icomoon-paypal3'       => 'PayPal',
					'icomoon-picassa'       => 'Picasa',
					'icomoon-picassa2'      => 'Picasa',
					'icomoon-pinterest'     => 'Pinterest',
					'icomoon-pinterest2'    => 'Pinterest',
					'icomoon-reddit'        => 'reddit',
					'icomoon-skype'         => 'Skype',
					'icomoon-soundcloud'    => 'SoundCloud',
					'icomoon-soundcloud2'   => 'SoundCloud',
					'icomoon-stackoverflow' => 'Stack Overflow',
					'icomoon-steam'         => 'Steam',
					'icomoon-steam2'        => 'Steam',
					'icomoon-stumbleupon'   => 'StumbleUpon',
					'icomoon-stumbleupon2'  => 'StumbleUpon',
					'icomoon-tumblr'        => 'Tumblr',
					'icomoon-tumblr2'       => 'Tumblr',
					'icomoon-twitter'       => 'Twitter',
					'icomoon-twitter2'      => 'Twitter',
					'icomoon-twitter3'      => 'Twitter',
					'icomoon-vimeo'         => 'Vimeo',
					'icomoon-vimeo2'        => 'Vimeo',
					'icomoon-vimeo3'        => 'Vimeo',
					'icomoon-windows'       => 'Windows',
					'icomoon-windows8'      => 'Windows 8',
					'icomoon-wordpress'     => 'WordPress',
					'icomoon-wordpress2'    => 'WordPress',
					'icomoon-xing'          => 'Xing',
					'icomoon-xing2'         => 'Xing',
					'icomoon-yahoo'         => 'Yahoo!',
					'icomoon-yelp'          => 'Yelp',
					'icomoon-youtube'       => 'YouTube',
					'icomoon-youtube2'      => 'YouTube',
				),
			),
			array(
				'key'   => 'browsers',
				'label' => __( 'Browsers', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-chrome'  => 'Chrome',
					'icomoon-firefox' => 'Firefox',
					'icomoon-IE'      => 'IE',
					'icomoon-opera'   => 'Opera',
					'icomoon-safari'  => 'Safari',
				),
			),
			array(
				'key'   => 'devices',
				'label' => __( 'Devices', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-alarm'         => __( 'Alarm', 'menu-icons-icomoon' ),
					'icomoon-alarm2'        => __( 'Alarm', 'menu-icons-icomoon' ),
					'icomoon-bell'          => __( 'Bell', 'menu-icons-icomoon' ),
					'icomoon-binoculars'    => __( 'Binoculars', 'menu-icons-icomoon' ),
					'icomoon-bullhorn'      => __( 'Bullhorn', 'menu-icons-icomoon' ),
					'icomoon-camera'        => __( 'Camera', 'menu-icons-icomoon' ),
					'icomoon-camera2'       => __( 'Camera', 'menu-icons-icomoon' ),
					'icomoon-clock'         => __( 'Clock', 'menu-icons-icomoon' ),
					'icomoon-clock2'        => __( 'Clock', 'menu-icons-icomoon' ),
					'icomoon-compass'       => __( 'Compass', 'menu-icons-icomoon' ),
					'icomoon-disk'          => __( 'Disk', 'menu-icons-icomoon' ),
					'icomoon-storage'       => __( 'HDD', 'menu-icons-icomoon' ),
					'icomoon-headphones'    => __( 'Headphones', 'menu-icons-icomoon' ),
					'icomoon-keyboard'      => __( 'Keyboard', 'menu-icons-icomoon' ),
					'icomoon-laptop'        => __( 'Laptop', 'menu-icons-icomoon' ),
					'icomoon-mobile'        => __( 'Mobile Phone', 'menu-icons-icomoon' ),
					'icomoon-mobile2'       => __( 'Mobile Phone', 'menu-icons-icomoon' ),
					'icomoon-phone'         => __( 'Phone', 'menu-icons-icomoon' ),
					'icomoon-phone-hang-up' => __( 'Phone', 'menu-icons-icomoon' ),
					'icomoon-print'         => __( 'Printer', 'menu-icons-icomoon' ),
					'icomoon-screen'        => __( 'Screen', 'menu-icons-icomoon' ),
					'icomoon-stopwatch'     => __( 'Stopwatch', 'menu-icons-icomoon' ),
					'icomoon-tablet'        => __( 'Tablet', 'menu-icons-icomoon' ),
					'icomoon-tv'            => __( 'TV', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'editor',
				'label' => __( 'Editor', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-attachment'         => __( 'Attachment', 'menu-icons-icomoon' ),
					'icomoon-copy'               => __( 'Copy', 'menu-icons-icomoon' ),
					'icomoon-copy2'              => __( 'Copy', 'menu-icons-icomoon' ),
					'icomoon-copy3'              => __( 'Copy', 'menu-icons-icomoon' ),
					'icomoon-scissors'           => __( 'Cut', 'menu-icons-icomoon' ),
					'icomoon-paste'              => __( 'Paste', 'menu-icons-icomoon' ),
					'icomoon-paste2'             => __( 'Paste', 'menu-icons-icomoon' ),
					'icomoon-paste3'             => __( 'Paste', 'menu-icons-icomoon' ),
					'icomoon-font'               => __( 'Font', 'menu-icons-icomoon' ),
					'icomoon-bold'               => __( 'Bold', 'menu-icons-icomoon' ),
					'icomoon-italic'             => __( 'Italic', 'menu-icons-icomoon' ),
					'icomoon-underline'          => __( 'Underline', 'menu-icons-icomoon' ),
					'icomoon-strikethrough'      => __( 'Strikethrough', 'menu-icons-icomoon' ),
					'icomoon-code'               => __( 'Code', 'menu-icons-icomoon' ),
					'icomoon-embed'              => __( 'Embed', 'menu-icons-icomoon' ),
					'icomoon-paragraph-left'     => __( 'Align Left', 'menu-icons-icomoon' ),
					'icomoon-paragraph-center'   => __( 'Align Center', 'menu-icons-icomoon' ),
					'icomoon-paragraph-right'    => __( 'Align Right', 'menu-icons-icomoon' ),
					'icomoon-paragraph-justify'  => __( 'Justify', 'menu-icons-icomoon' ),
					'icomoon-paragraph-left2'    => __( 'Align Left', 'menu-icons-icomoon' ),
					'icomoon-paragraph-center2'  => __( 'Align Center', 'menu-icons-icomoon' ),
					'icomoon-paragraph-right2'   => __( 'Align Right', 'menu-icons-icomoon' ),
					'icomoon-paragraph-justify2' => __( 'Justify', 'menu-icons-icomoon' ),
					'icomoon-undo'               => __( 'Undo', 'menu-icons-icomoon' ),
					'icomoon-redo'               => __( 'Redo', 'menu-icons-icomoon' ),
					'icomoon-undo2'              => __( 'Undo', 'menu-icons-icomoon' ),
					'icomoon-redo2'              => __( 'Redo', 'menu-icons-icomoon' ),
					'icomoon-quotes-left'        => __( 'Left Qoutes', 'menu-icons-icomoon' ),
					'icomoon-list'               => __( 'List', 'menu-icons-icomoon' ),
					'icomoon-list2'              => __( 'List', 'menu-icons-icomoon' ),
					'icomoon-numbered-list'      => __( 'Ordered List', 'menu-icons-icomoon' ),
					'icomoon-link'               => __( 'Link', 'menu-icons-icomoon' ),
					'icomoon-crop'               => __( 'Crop', 'menu-icons-icomoon' ),
					'icomoon-indent-increase'    => __( 'Increase Indent', 'menu-icons-icomoon' ),
					'icomoon-indent-decrease'    => __( 'Decrease Indent', 'menu-icons-icomoon' ),
					'icomoon-pilcrow'            => __( 'Pilcrow', 'menu-icons-icomoon' ),
					'icomoon-lefttoright'        => __( 'Left to Right', 'menu-icons-icomoon' ),
					'icomoon-righttoleft'        => __( 'Right to Left', 'menu-icons-icomoon' ),
					'icomoon-omega'              => __( 'Omega', 'menu-icons-icomoon' ),
					'icomoon-sigma'              => __( 'Sigma', 'menu-icons-icomoon' ),
					'icomoon-table'              => __( 'Table', 'menu-icons-icomoon' ),
					'icomoon-table2'             => __( 'Table', 'menu-icons-icomoon' ),
					'icomoon-insert-template'    => __( 'Insert Template', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'file-types',
				'label' => __( 'File Types', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-file'            => __( 'File', 'menu-icons-icomoon' ),
					'icomoon-file2'           => __( 'File', 'menu-icons-icomoon' ),
					'icomoon-file3'           => __( 'File', 'menu-icons-icomoon' ),
					'icomoon-file4'           => __( 'File', 'menu-icons-icomoon' ),
					'icomoon-film'            => __( 'Film', 'menu-icons-icomoon' ),
					'icomoon-folder'          => __( 'Folder', 'menu-icons-icomoon' ),
					'icomoon-folder-open'     => __( 'Folder', 'menu-icons-icomoon' ),
					'icomoon-image'           => __( 'Image', 'menu-icons-icomoon' ),
					'icomoon-image2'          => __( 'Image', 'menu-icons-icomoon' ),
					'icomoon-music'           => __( 'Music', 'menu-icons-icomoon' ),
					'icomoon-file-pdf'        => __( 'PDF', 'menu-icons-icomoon' ),
					'icomoon-libreoffice'     => 'Libre Office',
					'icomoon-file-openoffice' => 'Open Office',
					'icomoon-file-excel'      => 'Excel',
					'icomoon-file-powerpoint' => 'Power Point',
					'icomoon-file-word'       => 'Word',
					'icomoon-file-css'        => __( 'CSS', 'menu-icons-icomoon' ),
					'icomoon-file-xml'        => __( 'XML', 'menu-icons-icomoon' ),
					'icomoon-file-zip'        => 'Zip',
				),
			),
			array(
				'key'   => 'form',
				'label' => __( 'Form', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-checkbox-checked'   => __( 'Checked', 'menu-icons-icomoon' ),
					'icomoon-checkbox-unchecked' => __( 'Unchecked', 'menu-icons-icomoon' ),
					'icomoon-radio-checked'      => __( 'Checked', 'menu-icons-icomoon' ),
					'icomoon-radio-unchecked'    => __( 'Unchecked', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'games',
				'label' => __( 'Games', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-dice'     => __( 'Dice', 'menu-icons-icomoon' ),
					'icomoon-pacman'   => __( 'Pacman', 'menu-icons-icomoon' ),
					'icomoon-pawn'     => __( 'Pawn', 'menu-icons-icomoon' ),
					'icomoon-spades'   => __( 'Spades', 'menu-icons-icomoon' ),
					'icomoon-diamonds' => __( 'Diamonds', 'menu-icons-icomoon' ),
					'icomoon-clubs'    => __( 'Clubs', 'menu-icons-icomoon' ),
					'icomoon-heart'    => __( 'Heart', 'menu-icons-icomoon' ),
					'icomoon-heart2'   => __( 'Heart', 'menu-icons-icomoon' ),
					'icomoon-heart3'   => __( 'Heart', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'media-player',
				'label' => __( 'Media Player', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-first'           => __( 'First', 'menu-icons-icomoon' ),
					'icomoon-previous'        => __( 'Previous', 'menu-icons-icomoon' ),
					'icomoon-backward2'       => __( 'Fast Backward', 'menu-icons-icomoon' ),
					'icomoon-play3'           => __( 'Play', 'menu-icons-icomoon' ),
					'icomoon-pause2'          => __( 'Pause', 'menu-icons-icomoon' ),
					'icomoon-stop2'           => __( 'Stop', 'menu-icons-icomoon' ),
					'icomoon-forward3'        => __( 'Fast Forward', 'menu-icons-icomoon' ),
					'icomoon-next'            => __( 'Next', 'menu-icons-icomoon' ),
					'icomoon-last'            => __( 'Last', 'menu-icons-icomoon' ),
					'icomoon-forward2'        => __( 'Fast Forward', 'menu-icons-icomoon' ),
					'icomoon-backward'        => __( 'Fast Backward', 'menu-icons-icomoon' ),
					'icomoon-play2'           => __( 'Play', 'menu-icons-icomoon' ),
					'icomoon-pause'           => __( 'Pause', 'menu-icons-icomoon' ),
					'icomoon-stop'            => __( 'Stop', 'menu-icons-icomoon' ),
					'icomoon-play'            => __( 'Play', 'menu-icons-icomoon' ),
					'icomoon-eject'           => __( 'Eject', 'menu-icons-icomoon' ),
					'icomoon-volume-high'     => __( 'Vol. High', 'menu-icons-icomoon' ),
					'icomoon-volume-medium'   => __( 'Vol. Medium', 'menu-icons-icomoon' ),
					'icomoon-volume-low'      => __( 'Vol. Low', 'menu-icons-icomoon' ),
					'icomoon-volume-increase' => __( 'Vol. Up', 'menu-icons-icomoon' ),
					'icomoon-volume-decrease' => __( 'Vol. Down', 'menu-icons-icomoon' ),
					'icomoon-volume-mute'     => __( 'Mute', 'menu-icons-icomoon' ),
					'icomoon-volume-mute2'    => __( 'Mute', 'menu-icons-icomoon' ),
					'icomoon-loop'            => __( 'Loop', 'menu-icons-icomoon' ),
					'icomoon-loop2'           => __( 'Loop', 'menu-icons-icomoon' ),
					'icomoon-shuffle'         => __( 'Shuffle', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'misc',
				'label' => __( 'Misc.', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-accessibility'       => __( 'Accessibility', 'menu-icons-icomoon' ),
					'icomoon-address-book'        => __( 'Address Book', 'menu-icons-icomoon' ),
					'icomoon-aid'                 => __( 'Aid', 'menu-icons-icomoon' ),
					'icomoon-airplane'            => __( 'Airplane', 'menu-icons-icomoon' ),
					'icomoon-barcode'             => __( 'Barcode', 'menu-icons-icomoon' ),
					'icomoon-bars'                => __( 'Bars', 'menu-icons-icomoon' ),
					'icomoon-bars2'               => __( 'Bars', 'menu-icons-icomoon' ),
					'icomoon-book'                => __( 'Book', 'menu-icons-icomoon' ),
					'icomoon-books'               => __( 'Books', 'menu-icons-icomoon' ),
					'icomoon-bookmark'            => __( 'Bookmark', 'menu-icons-icomoon' ),
					'icomoon-bookmarks'           => __( 'Bookmarks', 'menu-icons-icomoon' ),
					'icomoon-briefcase'           => __( 'Briefcase', 'menu-icons-icomoon' ),
					'icomoon-brightness-medium'   => __( 'Brightness', 'menu-icons-icomoon' ),
					'icomoon-brightness-contrast' => __( 'Brightness/Contrast', 'menu-icons-icomoon' ),
					'icomoon-bubble'              => __( 'Bubble', 'menu-icons-icomoon' ),
					'icomoon-bubble2'             => __( 'Bubble', 'menu-icons-icomoon' ),
					'icomoon-bubbles'             => __( 'Bubbles', 'menu-icons-icomoon' ),
					'icomoon-bubbles2'            => __( 'Bubbles', 'menu-icons-icomoon' ),
					'icomoon-bubbles3'            => __( 'Bubbles', 'menu-icons-icomoon' ),
					'icomoon-bubbles4'            => __( 'Bubbles', 'menu-icons-icomoon' ),
					'icomoon-bug'                 => __( 'Bug', 'menu-icons-icomoon' ),
					'icomoon-busy'                => __( 'Busy', 'menu-icons-icomoon' ),
					'icomoon-cabinet'             => __( 'Cabinet', 'menu-icons-icomoon' ),
					'icomoon-calculate'           => __( 'Calculate', 'menu-icons-icomoon' ),
					'icomoon-calendar'            => __( 'Calendar', 'menu-icons-icomoon' ),
					'icomoon-calendar2'           => __( 'Calendar', 'menu-icons-icomoon' ),
					'icomoon-cart'                => __( 'Cart', 'menu-icons-icomoon' ),
					'icomoon-cart2'               => __( 'Cart', 'menu-icons-icomoon' ),
					'icomoon-cart3'               => __( 'Cart', 'menu-icons-icomoon' ),
					'icomoon-cog'                 => __( 'Cog', 'menu-icons-icomoon' ),
					'icomoon-cog2'                => __( 'Cog', 'menu-icons-icomoon' ),
					'icomoon-cogs'                => __( 'Cogs', 'menu-icons-icomoon' ),
					'icomoon-coin'                => __( 'Coin', 'menu-icons-icomoon' ),
					'icomoon-connection'          => __( 'Connection', 'menu-icons-icomoon' ),
					'icomoon-contrast'            => __( 'Contrast', 'menu-icons-icomoon' ),
					'icomoon-credit'              => __( 'Credit', 'menu-icons-icomoon' ),
					'icomoon-drawer'              => __( 'Drawer', 'menu-icons-icomoon' ),
					'icomoon-drawer2'             => __( 'Drawer', 'menu-icons-icomoon' ),
					'icomoon-drawer3'             => __( 'Drawer', 'menu-icons-icomoon' ),
					'icomoon-droplet'             => __( 'Droplet', 'menu-icons-icomoon' ),
					'icomoon-earth'               => __( 'Earth', 'menu-icons-icomoon' ),
					'icomoon-envelope'            => __( 'Envelope', 'menu-icons-icomoon' ),
					'icomoon-equalizer'           => __( 'Equalizer', 'menu-icons-icomoon' ),
					'icomoon-eye'                 => __( 'Eye', 'menu-icons-icomoon' ),
					'icomoon-eye2'                => __( 'Eye', 'menu-icons-icomoon' ),
					'icomoon-fire'                => __( 'Fire', 'menu-icons-icomoon' ),
					'icomoon-flag'                => __( 'Flag', 'menu-icons-icomoon' ),
					'icomoon-food'                => __( 'Food', 'menu-icons-icomoon' ),
					'icomoon-gift'                => __( 'Gift', 'menu-icons-icomoon' ),
					'icomoon-glass'               => __( 'Glass', 'menu-icons-icomoon' ),
					'icomoon-globe'               => __( 'Globe', 'menu-icons-icomoon' ),
					'icomoon-hammer'              => __( 'Hammer', 'menu-icons-icomoon' ),
					'icomoon-hammer2'             => __( 'Hammer', 'menu-icons-icomoon' ),
					'icomoon-history'             => __( 'History', 'menu-icons-icomoon' ),
					'icomoon-info'                => __( 'Info', 'menu-icons-icomoon' ),
					'icomoon-info2'               => __( 'Info', 'menu-icons-icomoon' ),
					'icomoon-key'                 => __( 'Key', 'menu-icons-icomoon' ),
					'icomoon-key2'                => __( 'Key', 'menu-icons-icomoon' ),
					'icomoon-leaf'                => __( 'Leaf', 'menu-icons-icomoon' ),
					'icomoon-lightning'           => __( 'Lightning', 'menu-icons-icomoon' ),
					'icomoon-magnet'              => __( 'Magnet', 'menu-icons-icomoon' ),
					'icomoon-mail'                => __( 'Mail', 'menu-icons-icomoon' ),
					'icomoon-mail2'               => __( 'Mail', 'menu-icons-icomoon' ),
					'icomoon-mail3'               => __( 'Mail', 'menu-icons-icomoon' ),
					'icomoon-mail4'               => __( 'Mail', 'menu-icons-icomoon' ),
					'icomoon-map'                 => __( 'Map', 'menu-icons-icomoon' ),
					'icomoon-map2'                => __( 'Map', 'menu-icons-icomoon' ),
					'icomoon-menu'                => __( 'Menu', 'menu-icons-icomoon' ),
					'icomoon-menu2'               => __( 'Menu', 'menu-icons-icomoon' ),
					'icomoon-meter'               => __( 'Meter', 'menu-icons-icomoon' ),
					'icomoon-meter2'              => __( 'Meter', 'menu-icons-icomoon' ),
					'icomoon-mug'                 => __( 'Mug', 'menu-icons-icomoon' ),
					'icomoon-newspaper'           => __( 'Newspaper', 'menu-icons-icomoon' ),
					'icomoon-notebook'            => __( 'Notebook', 'menu-icons-icomoon' ),
					'icomoon-notification'        => __( 'Notification', 'menu-icons-icomoon' ),
					'icomoon-paint-format'        => __( 'Paint Format', 'menu-icons-icomoon' ),
					'icomoon-pen'                 => __( 'Pen', 'menu-icons-icomoon' ),
					'icomoon-pencil'              => __( 'Pencil', 'menu-icons-icomoon' ),
					'icomoon-pencil2'             => __( 'Pencil', 'menu-icons-icomoon' ),
					'icomoon-pie'                 => __( 'Pie', 'menu-icons-icomoon' ),
					'icomoon-podcast'             => __( 'Podcast', 'menu-icons-icomoon' ),
					'icomoon-powercord'           => __( 'Power Cord', 'menu-icons-icomoon' ),
					'icomoon-profile'             => __( 'Profile', 'menu-icons-icomoon' ),
					'icomoon-pushpin'             => __( 'Pushpin', 'menu-icons-icomoon' ),
					'icomoon-qrcode'              => __( 'QR Code', 'menu-icons-icomoon' ),
					'icomoon-question'            => __( 'Question', 'menu-icons-icomoon' ),
					'icomoon-quill'               => __( 'Quill', 'menu-icons-icomoon' ),
					'icomoon-rocket'              => __( 'Rocket', 'menu-icons-icomoon' ),
					'icomoon-settings'            => __( 'Settings', 'menu-icons-icomoon' ),
					'icomoon-shield'              => __( 'Shield', 'menu-icons-icomoon' ),
					'icomoon-spinner'             => __( 'Spinner', 'menu-icons-icomoon' ),
					'icomoon-spinner2'            => __( 'Spinner', 'menu-icons-icomoon' ),
					'icomoon-spinner3'            => __( 'Spinner', 'menu-icons-icomoon' ),
					'icomoon-spinner4'            => __( 'Spinner', 'menu-icons-icomoon' ),
					'icomoon-spinner5'            => __( 'Spinner', 'menu-icons-icomoon' ),
					'icomoon-spinner6'            => __( 'Spinner', 'menu-icons-icomoon' ),
					'icomoon-stack'               => __( 'Stack', 'menu-icons-icomoon' ),
					'icomoon-star'                => __( 'Star', 'menu-icons-icomoon' ),
					'icomoon-star2'               => __( 'Star', 'menu-icons-icomoon' ),
					'icomoon-star3'               => __( 'Star', 'menu-icons-icomoon' ),
					'icomoon-stats'               => __( 'Stats', 'menu-icons-icomoon' ),
					'icomoon-switch'              => __( 'Switch', 'menu-icons-icomoon' ),
					'icomoon-support'             => __( 'Support', 'menu-icons-icomoon' ),
					'icomoon-tag'                 => __( 'Tag', 'menu-icons-icomoon' ),
					'icomoon-tags'                => __( 'Tags', 'menu-icons-icomoon' ),
					'icomoon-target'              => __( 'Target', 'menu-icons-icomoon' ),
					'icomoon-ticket'              => __( 'Ticket', 'menu-icons-icomoon' ),
					'icomoon-tree'                => __( 'Tree', 'menu-icons-icomoon' ),
					'icomoon-trophy'              => __( 'Trophy', 'menu-icons-icomoon' ),
					'icomoon-truck'               => __( 'Truck', 'menu-icons-icomoon' ),
					'icomoon-user'                => __( 'User', 'menu-icons-icomoon' ),
					'icomoon-user2'               => __( 'User', 'menu-icons-icomoon' ),
					'icomoon-user3'               => __( 'User', 'menu-icons-icomoon' ),
					'icomoon-user4'               => __( 'User', 'menu-icons-icomoon' ),
					'icomoon-users'               => __( 'Users', 'menu-icons-icomoon' ),
					'icomoon-users2'              => __( 'Users', 'menu-icons-icomoon' ),
					'icomoon-wand'                => __( 'Wand', 'menu-icons-icomoon' ),
					'icomoon-warning'             => __( 'Warning', 'menu-icons-icomoon' ),
					'icomoon-wrench'              => __( 'Wrench', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'places',
				'label' => __( 'Places', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-blog'      => __( 'Blog', 'menu-icons-icomoon' ),
					'icomoon-cloud'     => __( 'Cloud', 'menu-icons-icomoon' ),
					'icomoon-cloud2'    => __( 'Cloud', 'menu-icons-icomoon' ),
					'icomoon-dashboard' => __( 'Dashboard', 'menu-icons-icomoon' ),
					'icomoon-feed'      => __( 'Feed', 'menu-icons-icomoon' ),
					'icomoon-feed2'     => __( 'Feed', 'menu-icons-icomoon' ),
					'icomoon-feed3'     => __( 'Feed', 'menu-icons-icomoon' ),
					'icomoon-feed4'     => __( 'Feed', 'menu-icons-icomoon' ),
					'icomoon-home'      => __( 'Home', 'menu-icons-icomoon' ),
					'icomoon-home2'     => __( 'Home', 'menu-icons-icomoon' ),
					'icomoon-home3'     => __( 'Home', 'menu-icons-icomoon' ),
					'icomoon-office'    => __( 'Office', 'menu-icons-icomoon' ),
					'icomoon-lab'       => __( 'Lab', 'menu-icons-icomoon' ),
					'icomoon-library'   => __( 'Library', 'menu-icons-icomoon' ),
					'icomoon-location'  => __( 'Location', 'menu-icons-icomoon' ),
					'icomoon-location2' => __( 'Location', 'menu-icons-icomoon' ),
					'icomoon-remove'    => __( 'Trash', 'menu-icons-icomoon' ),
					'icomoon-remove2'   => __( 'Trash', 'menu-icons-icomoon' ),
					'icomoon-road'      => __( 'Road', 'menu-icons-icomoon' ),
				),
			),
			array(
				'key'   => 'smileys',
				'label' => __( 'Smileys', 'menu-icons-icomoon' ),
				'items' => array(
					'icomoon-angry'      => __( 'Angry', 'menu-icons-icomoon' ),
					'icomoon-cool'       => __( 'Cool', 'menu-icons-icomoon' ),
					'icomoon-confused'   => __( 'Confused', 'menu-icons-icomoon' ),
					'icomoon-evil'       => __( 'Evil', 'menu-icons-icomoon' ),
					'icomoon-happy'      => __( 'Happy', 'menu-icons-icomoon' ),
					'icomoon-grin'       => __( 'Grin', 'menu-icons-icomoon' ),
					'icomoon-neutral'    => __( 'Neutral', 'menu-icons-icomoon' ),
					'icomoon-sad'        => __( 'Sad', 'menu-icons-icomoon' ),
					'icomoon-shocked'    => __( 'Shocked', 'menu-icons-icomoon' ),
					'icomoon-smiley'     => __( 'Smiley', 'menu-icons-icomoon' ),
					'icomoon-tongue'     => __( 'Tongue', 'menu-icons-icomoon' ),
					'icomoon-wink'       => __( 'Wink', 'menu-icons-icomoon' ),
					'icomoon-wondering'  => __( 'Wondering', 'menu-icons-icomoon' ),
					'icomoon-angry2'     => __( 'Angry', 'menu-icons-icomoon' ),
					'icomoon-cool2'      => __( 'Cool', 'menu-icons-icomoon' ),
					'icomoon-confused2'  => __( 'Confused', 'menu-icons-icomoon' ),
					'icomoon-evil2'      => __( 'Evil', 'menu-icons-icomoon' ),
					'icomoon-happy2'     => __( 'Happy', 'menu-icons-icomoon' ),
					'icomoon-grin2'      => __( 'Grin', 'menu-icons-icomoon' ),
					'icomoon-neutral2'   => __( 'Neutral', 'menu-icons-icomoon' ),
					'icomoon-sad2'       => __( 'Sad', 'menu-icons-icomoon' ),
					'icomoon-shocked2'   => __( 'Shocked', 'menu-icons-icomoon' ),
					'icomoon-smiley2'    => __( 'Smiley', 'menu-icons-icomoon' ),
					'icomoon-tongue2'    => __( 'Tongue', 'menu-icons-icomoon' ),
					'icomoon-wink2'      => __( 'Wink', 'menu-icons-icomoon' ),
					'icomoon-wondering2' => __( 'Wondering', 'menu-icons-icomoon' ),
				),
			),
		);
	}
}
