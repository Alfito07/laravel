<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ZenixController extends Controller
{
	public function activity() {
	$page_title = 'Activity';
	$page_description = 'Some description for the page';
	return view('zenix/account/activity', compact('page_title', 'page_description'));
	}

	public function api_keys() {
	$page_title = 'Api Keys';
	$page_description = 'Some description for the page';
	return view('zenix/account/api-keys', compact('page_title', 'page_description'));
	}

	public function billing() {
	$page_title = 'Billing';
	$page_description = 'Some description for the page';
	return view('zenix/account/billing', compact('page_title', 'page_description'));
	}

	public function logs() {
	$page_title = 'Logs';
	$page_description = 'Some description for the page';
	return view('zenix/account/logs', compact('page_title', 'page_description'));
	}

	public function overview() {
	$page_title = 'Overview';
	$page_description = 'Some description for the page';
	return view('zenix/account/overview', compact('page_title', 'page_description'));
	}

	public function referrals() {
	$page_title = 'Referrals';
	$page_description = 'Some description for the page';
	return view('zenix/account/referrals', compact('page_title', 'page_description'));
	}

	public function security() {
	$page_title = 'Security';
	$page_description = 'Some description for the page';
	return view('zenix/account/security', compact('page_title', 'page_description'));
	}

	public function settings() {
	$page_title = 'Settings';
	$page_description = 'Some description for the page';
	return view('zenix/account/settings', compact('page_title', 'page_description'));
	}

	public function statements() {
	$page_title = 'Statements';
	$page_description = 'Some description for the page';
	return view('zenix/account/statements', compact('page_title', 'page_description'));
	}

	public function auto_write() {
	$page_title = 'Auto Write';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/auto-write', compact('page_title', 'page_description'));
	}

	public function chatbot() {
	$page_title = 'Chatbot';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/chatbot', compact('page_title', 'page_description'));
	}

	public function fine_tune_models() {
	$page_title = 'Fine Tune Models';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/fine-tune-models', compact('page_title', 'page_description'));
	}

	public function import() {
	$page_title = 'Import';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/import', compact('page_title', 'page_description'));
	}

	public function prompt() {
	$page_title = 'Prompt';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/prompt', compact('page_title', 'page_description'));
	}

	public function repurpose() {
	$page_title = 'Repurpose';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/repurpose', compact('page_title', 'page_description'));
	}

	public function rss() {
	$page_title = 'Rss';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/rss', compact('page_title', 'page_description'));
	}

	public function scheduled() {
	$page_title = 'Scheduled';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/scheduled', compact('page_title', 'page_description'));
	}

	public function setting() {
	$page_title = 'Setting';
	$page_description = 'Some description for the page';
	return view('zenix/aikit/setting', compact('page_title', 'page_description'));
	}

	public function app_calender() {
	$page_title = 'App Calender';
	$page_description = 'Some description for the page';
	return view('zenix/app/app-calender', compact('page_title', 'page_description'));
	}

	public function app_profile() {
	$page_title = 'App Profile';
	$page_description = 'Some description for the page';
	return view('zenix/app/app-profile', compact('page_title', 'page_description'));
	}

	public function chartist() {
	$page_title = 'Chartist';
	$page_description = 'Some description for the page';
	return view('zenix/chart/chartist', compact('page_title', 'page_description'));
	}

	public function chartjs() {
	$page_title = 'Chartjs';
	$page_description = 'Some description for the page';
	return view('zenix/chart/chartjs', compact('page_title', 'page_description'));
	}

	public function flot() {
	$page_title = 'Flot';
	$page_description = 'Some description for the page';
	return view('zenix/chart/flot', compact('page_title', 'page_description'));
	}

	public function morris() {
	$page_title = 'Morris';
	$page_description = 'Some description for the page';
	return view('zenix/chart/morris', compact('page_title', 'page_description'));
	}

	public function peity() {
	$page_title = 'Peity';
	$page_description = 'Some description for the page';
	return view('zenix/chart/peity', compact('page_title', 'page_description'));
	}

	public function sparkline() {
	$page_title = 'Sparkline';
	$page_description = 'Some description for the page';
	return view('zenix/chart/sparkline', compact('page_title', 'page_description'));
	}

	public function add_blog() {
	$page_title = 'Add Blog';
	$page_description = 'Some description for the page';
	return view('zenix/cms/add-blog', compact('page_title', 'page_description'));
	}

	public function add_email() {
	$page_title = 'Add Email';
	$page_description = 'Some description for the page';
	return view('zenix/message/add-email', compact('page_title', 'page_description'));
	}

	public function blog_category() {
	$page_title = 'Blog Category';
	$page_description = 'Some description for the page';
	return view('zenix/cms/blog-category', compact('page_title', 'page_description'));
	}

	public function blog() {
	$page_title = 'Blog';
	$page_description = 'Some description for the page';
	return view('zenix/cms/blog', compact('page_title', 'page_description'));
	}

	public function content_add() {
	$page_title = 'Content Add';
	$page_description = 'Some description for the page';
	return view('zenix/cms/content-add', compact('page_title', 'page_description'));
	}

	public function content() {
	$page_title = 'Content';
	$page_description = 'Some description for the page';
	return view('zenix/cms/content', compact('page_title', 'page_description'));
	}

	public function email_template() {
	$page_title = 'Email Template';
	$page_description = 'Some description for the page';
	return view('zenix/cms/email-template', compact('page_title', 'page_description'));
	}

	public function menu() {
	$page_title = 'Menu';
	$page_description = 'Some description for the page';
	return view('zenix/cms/menu', compact('page_title', 'page_description'));
	}

	public function coin_details() {
	$page_title = 'Coin Details';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/coin-details', compact('page_title', 'page_description'));
	}

	public function ui_accordion() {
	$page_title = 'Ui Accordion';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-accordion', compact('page_title', 'page_description'));
	}

	public function ui_alert() {
	$page_title = 'Ui Alert';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-alert', compact('page_title', 'page_description'));
	}

	public function ui_badge() {
	$page_title = 'Ui Badge';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-badge', compact('page_title', 'page_description'));
	}

	public function ui_breadcrumb() {
	$page_title = 'Ui Breadcrumb';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-breadcrumb', compact('page_title', 'page_description'));
	}

	public function ui_button_group() {
	$page_title = 'Ui Button Group';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-button-group', compact('page_title', 'page_description'));
	}

	public function ui_button() {
	$page_title = 'Ui Button';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-button', compact('page_title', 'page_description'));
	}

	public function ui_card() {
	$page_title = 'Ui Card';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-card', compact('page_title', 'page_description'));
	}

	public function ui_carousel() {
	$page_title = 'Ui Carousel';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-carousel', compact('page_title', 'page_description'));
	}

	public function ui_colors() {
	$page_title = 'Ui Colors';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-colors', compact('page_title', 'page_description'));
	}

	public function ui_dropdown() {
	$page_title = 'Ui Dropdown';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-dropdown', compact('page_title', 'page_description'));
	}

	public function ui_grid() {
	$page_title = 'Ui Grid';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-grid', compact('page_title', 'page_description'));
	}

	public function ui_list_group() {
	$page_title = 'Ui List Group';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-list-group', compact('page_title', 'page_description'));
	}

	public function ui_media_object() {
	$page_title = 'Ui Media Object';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-media-object', compact('page_title', 'page_description'));
	}

	public function ui_modal() {
	$page_title = 'Ui Modal';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-modal', compact('page_title', 'page_description'));
	}

	public function ui_navbar() {
	$page_title = 'Ui Navbar';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-navbar', compact('page_title', 'page_description'));
	}

	public function ui_object_fit() {
	$page_title = 'Ui Object Fit';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-object-fit', compact('page_title', 'page_description'));
	}

	public function ui_offcanvas() {
	$page_title = 'Ui Offcanvas';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-offcanvas', compact('page_title', 'page_description'));
	}

	public function ui_pagination() {
	$page_title = 'Ui Pagination';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-pagination', compact('page_title', 'page_description'));
	}

	public function ui_placeholders() {
	$page_title = 'Ui Placeholders';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-placeholders', compact('page_title', 'page_description'));
	}

	public function ui_popover() {
	$page_title = 'Ui Popover';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-popover', compact('page_title', 'page_description'));
	}

	public function ui_progressbar() {
	$page_title = 'Ui Progressbar';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-progressbar', compact('page_title', 'page_description'));
	}

	public function ui_range_slider() {
	$page_title = 'Ui Range Slider';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-range-slider', compact('page_title', 'page_description'));
	}

	public function ui_scrollspy() {
	$page_title = 'Ui Scrollspy';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-scrollspy', compact('page_title', 'page_description'));
	}

	public function ui_spinners() {
	$page_title = 'Ui Spinners';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-spinners', compact('page_title', 'page_description'));
	}

	public function ui_tab() {
	$page_title = 'Ui Tab';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-tab', compact('page_title', 'page_description'));
	}

	public function ui_toasts() {
	$page_title = 'Ui Toasts';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-toasts', compact('page_title', 'page_description'));
	}

	public function ui_typography() {
	$page_title = 'Ui Typography';
	$page_description = 'Some description for the page';
	return view('zenix/components/ui-typography', compact('page_title', 'page_description'));
	}

	public function contact_card() {
	$page_title = 'Contact Card';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/contact-card', compact('page_title', 'page_description'));
	}

	public function contact_list() {
	$page_title = 'Contact List';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/contact-list', compact('page_title', 'page_description'));
	}

	public function ecom_checkout() {
	$page_title = 'Ecom Checkout';
	$page_description = 'Some description for the page';
	return view('zenix/ecom/ecom-checkout', compact('page_title', 'page_description'));
	}

	public function ecom_customers() {
	$page_title = 'Ecom Customers';
	$page_description = 'Some description for the page';
	return view('zenix/ecom/ecom-customers', compact('page_title', 'page_description'));
	}

	public function ecom_invoice() {
	$page_title = 'Ecom Invoice';
	$page_description = 'Some description for the page';
	return view('zenix/ecom/ecom-invoice', compact('page_title', 'page_description'));
	}

	public function ecom_product_detail() {
	$page_title = 'Ecom Product Detail';
	$page_description = 'Some description for the page';
	return view('zenix/ecom/ecom-product-detail', compact('page_title', 'page_description'));
	}

	public function ecom_product_grid() {
	$page_title = 'Ecom Product Grid';
	$page_description = 'Some description for the page';
	return view('zenix/ecom/ecom-product-grid', compact('page_title', 'page_description'));
	}

	public function ecom_product_list() {
	$page_title = 'Ecom Product List';
	$page_description = 'Some description for the page';
	return view('zenix/ecom/ecom-product-list', compact('page_title', 'page_description'));
	}

	public function ecom_product_order() {
	$page_title = 'Ecom Product Order';
	$page_description = 'Some description for the page';
	return view('zenix/ecom/ecom-product-order', compact('page_title', 'page_description'));
	}

	public function email_compose() {
	$page_title = 'Email Compose';
	$page_description = 'Some description for the page';
	return view('zenix/message/email-compose', compact('page_title', 'page_description'));
	}

	public function email_inbox() {
	$page_title = 'Email Inbox';
	$page_description = 'Some description for the page';
	return view('zenix/message/email-inbox', compact('page_title', 'page_description'));
	}

	public function email_read() {
	$page_title = 'Email Read';
	$page_description = 'Some description for the page';
	return view('zenix/message/email-read', compact('page_title', 'page_description'));
	}

	public function form_editor_summernote() {
	$page_title = 'Form Editor Summernote';
	$page_description = 'Some description for the page';
	return view('zenix/form/form-editor-summernote', compact('page_title', 'page_description'));
	}

	public function form_element() {
	$page_title = 'Form Element';
	$page_description = 'Some description for the page';
	return view('zenix/form/form-element', compact('page_title', 'page_description'));
	}

	public function form_pickers() {
	$page_title = 'Form Pickers';
	$page_description = 'Some description for the page';
	return view('zenix/form/form-pickers', compact('page_title', 'page_description'));
	}

	public function form_validation_jquery() {
	$page_title = 'Form Validation Jquery';
	$page_description = 'Some description for the page';
	return view('zenix/form/form-validation-jquery', compact('page_title', 'page_description'));
	}

	public function form_wizard() {
	$page_title = 'Form Wizard';
	$page_description = 'Some description for the page';
	return view('zenix/form/form-wizard', compact('page_title', 'page_description'));
	}

	public function index_2() {
	$page_title = 'Index 2';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/index-2', compact('page_title', 'page_description'));
	}

	public function index() {
	$page_title = 'Index';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/index', compact('page_title', 'page_description'));
	}

	public function market_capital() {
	$page_title = 'Market Capital';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/market-capital', compact('page_title', 'page_description'));
	}

	public function my_wallets() {
	$page_title = 'My Wallets';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/my-wallets', compact('page_title', 'page_description'));
	}

	public function page_chat() {
	$page_title = 'Page Chat';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-chat', compact('page_title', 'page_description'));
	}

	public function page_empty() {
	$page_title = 'Page Empty';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-empty', compact('page_title', 'page_description'));
	}

	public function page_error_400() {
	$page_title = 'Page Error 400';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-error-400', compact('page_title', 'page_description'));
	}

	public function page_error_403() {
	$page_title = 'Page Error 403';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-error-403', compact('page_title', 'page_description'));
	}

	public function page_error_404() {
	$page_title = 'Page Error 404';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-error-404', compact('page_title', 'page_description'));
	}

	public function page_error_500() {
	$page_title = 'Page Error 500';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-error-500', compact('page_title', 'page_description'));
	}

	public function page_error_503() {
	$page_title = 'Page Error 503';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-error-503', compact('page_title', 'page_description'));
	}

	public function page_forgot_password() {
	$page_title = 'Page Forgot Password';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-forgot-password', compact('page_title', 'page_description'));
	}

	public function page_lock_screen() {
	$page_title = 'Page Lock Screen';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-lock-screen', compact('page_title', 'page_description'));
	}

	public function page_login() {
	$page_title = 'Page Login';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-login', compact('page_title', 'page_description'));
	}

	public function page_register() {
	$page_title = 'Page Register';
	$page_description = 'Some description for the page';
	return view('zenix/page/page-register', compact('page_title', 'page_description'));
	}

	public function lightgallery() {
	$page_title = 'Lightgallery';
	$page_description = 'Some description for the page';
	return view('zenix/plugins/lightgallery', compact('page_title', 'page_description'));
	}

	public function map_jqvmap() {
	$page_title = 'Map Jqvmap';
	$page_description = 'Some description for the page';
	return view('zenix/plugins/map-jqvmap', compact('page_title', 'page_description'));
	}

	public function nestable() {
	$page_title = 'Nestable';
	$page_description = 'Some description for the page';
	return view('zenix/plugins/nestable', compact('page_title', 'page_description'));
	}

	public function noui_slider() {
	$page_title = 'Noui Slider';
	$page_description = 'Some description for the page';
	return view('zenix/plugins/noui-slider', compact('page_title', 'page_description'));
	}

	public function select2() {
	$page_title = 'Select2';
	$page_description = 'Some description for the page';
	return view('zenix/plugins/select2', compact('page_title', 'page_description'));
	}

	public function sweetalert() {
	$page_title = 'Sweetalert';
	$page_description = 'Some description for the page';
	return view('zenix/plugins/sweetalert', compact('page_title', 'page_description'));
	}

	public function toastr() {
	$page_title = 'Toastr';
	$page_description = 'Some description for the page';
	return view('zenix/plugins/toastr', compact('page_title', 'page_description'));
	}

	public function portfolio() {
	$page_title = 'Portfolio';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/portfolio', compact('page_title', 'page_description'));
	}

	public function post_details() {
	$page_title = 'Post Details';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/post-details', compact('page_title', 'page_description'));
	}

	public function activity_profile() {
	$page_title = 'Activity';
	$page_description = 'Some description for the page';
	return view('zenix/profile/activity-profile', compact('page_title', 'page_description'));
	}

	public function campaigns() {
	$page_title = 'Campaigns';
	$page_description = 'Some description for the page';
	return view('zenix/profile/campaigns', compact('page_title', 'page_description'));
	}

	public function documents() {
	$page_title = 'Documents';
	$page_description = 'Some description for the page';
	return view('zenix/profile/documents', compact('page_title', 'page_description'));
	}

	public function followers() {
	$page_title = 'Followers';
	$page_description = 'Some description for the page';
	return view('zenix/profile/followers', compact('page_title', 'page_description'));
	}

	public function overview_profile() {
	$page_title = 'Overview';
	$page_description = 'Some description for the page';
	return view('zenix/profile/overview-profile', compact('page_title', 'page_description'));
	}

	public function projects_details() {
	$page_title = 'Projects Details';
	$page_description = 'Some description for the page';
	return view('zenix/profile/projects-details', compact('page_title', 'page_description'));
	}

	public function projects() {
	$page_title = 'Projects';
	$page_description = 'Some description for the page';
	return view('zenix/profile/projects', compact('page_title', 'page_description'));
	}

	public function project_card() {
	$page_title = 'Project Card';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/project-card', compact('page_title', 'page_description'));
	}

	public function project_list() {
	$page_title = 'Project List';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/project-list', compact('page_title', 'page_description'));
	}

	public function bootstrap_basic() {
	$page_title = 'Bootstrap Basic';
	$page_description = 'Some description for the page';
	return view('zenix/table/bootstrap-basic', compact('page_title', 'page_description'));
	}

	public function datatable_basic() {
	$page_title = 'Datatable Basic';
	$page_description = 'Some description for the page';
	return view('zenix/table/datatable-basic', compact('page_title', 'page_description'));
	}

	public function tranasactions() {
	$page_title = 'Tranasactions';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/tranasactions', compact('page_title', 'page_description'));
	}

	public function user_list_column() {
	$page_title = 'User List Column';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/user-list-column', compact('page_title', 'page_description'));
	}

	public function user_list_datatable() {
	$page_title = 'User List Datatable';
	$page_description = 'Some description for the page';
	return view('zenix/dashboard/user-list-datatable', compact('page_title', 'page_description'));
	}

	public function widget_basic() {
	$page_title = 'Widget Basic';
	$page_description = 'Some description for the page';
	return view('zenix/app/widget-basic', compact('page_title', 'page_description'));
	}

	public function ajax_contact_list() {
	return view('zenix/ajax/contact-list');
	}

}