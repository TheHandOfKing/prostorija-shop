<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-navigation">
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">
					<?php 
					if($endpoint == 'dashboard') {
						?>
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="11.85" y="0.85" width="7.3" height="7.3" rx="2.15" stroke="white" stroke-width="1.7"/>
							<rect x="11.85" y="11.85" width="7.3" height="7.3" rx="2.15" stroke="white" stroke-width="1.7"/>
							<rect x="0.85" y="0.85" width="7.3" height="7.3" rx="2.15" stroke="white" stroke-width="1.7"/>
							<rect x="0.85" y="11.85" width="7.3" height="7.3" rx="2.15" stroke="white" stroke-width="1.7"/>
						</svg>						
						<?php
					}
					else if ($endpoint == 'customer-logout') {
						?>
						<svg width="22" fill="#fff" stroke="#fff" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 19.3334H3.49999C3.03998 19.3334 2.66667 18.96 2.66667 18.5001V3.50002C2.66667 3.04002 3.04002 2.66671 3.49999 2.66671H11C11.4608 2.66671 11.8333 2.29422 11.8333 1.83339C11.8333 1.37257 11.4608 1 11 1H3.49999C2.12166 1 1 2.1217 1 3.50002V18.5C1 19.8783 2.12166 21 3.49999 21H11C11.4608 21 11.8333 20.6275 11.8333 20.1667C11.8333 19.7059 11.4608 19.3334 11 19.3334Z" stroke-width="0.1"/>
							<path d="M20.8177 10.4067L15.751 5.40666C15.4243 5.08332 14.896 5.08751 14.5727 5.41501C14.2493 5.7425 14.2527 6.27 14.581 6.59334L18.2018 10.1667H8.49933C8.0385 10.1667 7.66602 10.5391 7.66602 11C7.66602 11.4608 8.0385 11.8333 8.49933 11.8333H18.2018L14.581 15.4066C14.2527 15.73 14.2502 16.2575 14.5727 16.585C14.736 16.75 14.951 16.8333 15.166 16.8333C15.3777 16.8333 15.5893 16.7533 15.751 16.5933L20.8177 11.5933C20.976 11.4366 21.066 11.2233 21.066 10.9999C21.066 10.7767 20.9768 10.5642 20.8177 10.4067Z" stroke-width="0.1"/>
						</svg>
						<?php
					}
					else if ($endpoint == 'edit-account') {
						?>
						<svg fill="#fff" stroke="#fff" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.4283 10.9998C17.0338 10.9998 16.714 11.3196 16.714 11.7141V18.8568C16.714 19.2513 16.3942 19.5711 15.9997 19.5711H3.14282C2.74833 19.5711 2.42853 19.2513 2.42853 18.8568V4.57135C2.42853 4.17685 2.74833 3.85706 3.14282 3.85706H11.7141C12.1086 3.85706 12.4284 3.53727 12.4284 3.14277C12.4284 2.74828 12.1086 2.42853 11.7141 2.42853H3.14282C1.95937 2.42853 1 3.3879 1 4.57135V18.8568C1 20.0403 1.95937 20.9996 3.14282 20.9996H15.9998C17.1832 20.9996 18.1426 20.0403 18.1426 18.8568V11.7141C18.1426 11.3196 17.8228 10.9998 17.4283 10.9998Z" stroke-width="0.3"/>
							<path d="M20.2004 1.80097C19.6875 1.28804 18.9919 0.999928 18.2666 1.00001C17.5408 0.997919 16.8445 1.28653 16.333 1.80144L6.92458 11.2091C6.84653 11.2877 6.78764 11.3833 6.75245 11.4884L5.32391 15.774C5.19924 16.1483 5.40159 16.5528 5.77587 16.6774C5.84849 16.7016 5.92453 16.7139 6.00104 16.714C6.07771 16.7139 6.15392 16.7016 6.22674 16.6776L10.5124 15.2491C10.6176 15.2139 10.7133 15.1547 10.7917 15.0762L20.2001 5.66781C21.2679 4.60008 21.2681 2.86883 20.2004 1.80097ZM19.1901 4.6585L9.90453 13.9441L7.13029 14.8705L8.05384 12.0998L17.343 2.81425C17.8536 2.30458 18.6809 2.30542 19.1905 2.81609C19.434 3.06005 19.5712 3.3903 19.5722 3.73496C19.5731 4.08145 19.4355 4.41392 19.1901 4.6585Z" stroke-width="0.3"/>
						</svg>
						<?php
					}
					else if ($endpoint == 'edit-address') {
						?>
							<svg fill="#fff" version="1.0" xmlns="http://www.w3.org/2000/svg"
							width="20px" height="20px" viewBox="0 0 1280.000000 1280.000000"
							preserveAspectRatio="xMidYMid meet">
							<g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
							>
							<path d="M310 6125 l0 -4055 6085 0 6085 0 0 4055 0 4055 -6085 0 -6085 0 0
							-4055z m11155 3496 c-17 -16 -1000 -907 -2185 -1982 -1185 -1074 -2184 -1980
							-2220 -2012 -168 -154 -365 -275 -510 -314 -96 -25 -236 -22 -330 6 -144 44
							-300 138 -455 275 -119 104 -4377 3966 -4425 4012 l-45 44 5100 0 5100 0 -30
							-29z m-8771 -1955 l1697 -1540 -33 -32 c-18 -17 -784 -712 -1703 -1544 -919
							-832 -1689 -1531 -1712 -1554 l-43 -40 0 3168 0 3168 48 -44 c27 -23 812 -736
							1746 -1582z m9194 -3120 l-3 -1586 -1710 1551 c-940 852 -1725 1565 -1744
							1583 l-33 34 1743 1581 1744 1582 3 -1580 c1 -869 1 -2293 0 -3165z m-6868
							1009 c212 -191 412 -363 520 -446 535 -415 867 -485 1294 -271 231 115 488
							315 980 761 l190 171 40 -39 c23 -21 646 -587 1386 -1257 740 -671 1506 -1365
							1703 -1544 l359 -325 -2545 -3 c-1400 -1 -3694 -1 -5098 0 l-2553 3 1744 1582
							1745 1583 35 -34 c19 -18 109 -100 200 -181z"/>
							</g>
							</svg>
						<?php
					}
					else if ($endpoint == 'downloads') {
						?>
						<svg fill="#fff" stroke="#fff" width="20px" height="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 29.978 29.978" style="enable-background:new 0 0 29.978 29.978;" xml:space="preserve">
						<g>
							<path d="M25.462,19.105v6.848H4.515v-6.848H0.489v8.861c0,1.111,0.9,2.012,2.016,2.012h24.967c1.115,0,2.016-0.9,2.016-2.012
								v-8.861H25.462z"/>
							<path d="M14.62,18.426l-5.764-6.965c0,0-0.877-0.828,0.074-0.828s3.248,0,3.248,0s0-0.557,0-1.416c0-2.449,0-6.906,0-8.723
								c0,0-0.129-0.494,0.615-0.494c0.75,0,4.035,0,4.572,0c0.536,0,0.524,0.416,0.524,0.416c0,1.762,0,6.373,0,8.742
								c0,0.768,0,1.266,0,1.266s1.842,0,2.998,0c1.154,0,0.285,0.867,0.285,0.867s-4.904,6.51-5.588,7.193
								C15.092,18.979,14.62,18.426,14.62,18.426z"/>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						<g>
						</g>
						</svg>
						<?php
					}
					else if ($endpoint == 'orders') {
						?>
						<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20.5938 1H3.40625C2.07946 1 1 2.07946 1 3.40625V13.7188C1 15.0455 2.07946 16.125 3.40625 16.125H20.5938C21.9205 16.125 23 15.0455 23 13.7188V3.40625C23 2.07946 21.9205 1 20.5938 1ZM3.40625 2.375H20.5938C21.1624 2.375 21.625 2.83764 21.625 3.40625V4.78125H2.375V3.40625C2.375 2.83764 2.83764 2.375 3.40625 2.375ZM20.5938 14.75H3.40625C2.83764 14.75 2.375 14.2874 2.375 13.7188V6.15625H21.625V13.7188C21.625 14.2874 21.1624 14.75 20.5938 14.75Z" fill="#fff" stroke="#fff" stroke-width="0.2"/>
							<path d="M5.8125 12.6875H5.125C4.74533 12.6875 4.4375 12.3797 4.4375 12V11.3125C4.4375 10.9328 4.74533 10.625 5.125 10.625H5.8125C6.19217 10.625 6.5 10.9328 6.5 11.3125V12C6.5 12.3797 6.19217 12.6875 5.8125 12.6875Z" fill="#fff" stroke="#fff" stroke-width="0.2"/>
						</svg>								
						<?php
					}
					?>
					<span class="nav-text">
						<?php echo esc_html( $label ); ?>
					</span>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

	<div data-clicked = "0" class="arrow">
		<svg class="arrow-svg" width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M15 17.898C15 18.972 13.7351 19.546 12.9268 18.8388L6.61617 13.3169C5.81935 12.6197 5.81935 11.3801 6.61617 10.6829L12.9268 5.16108C13.7351 4.45388 15 5.02785 15 6.1018L15 17.898Z" fill="#212121"/>
		</svg>			
	</div>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
