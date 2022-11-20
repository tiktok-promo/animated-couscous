<?php
$ip = $_SERVER['REMOTE_ADDR'];
$sub1 = !empty($_GET['sub1']) ? $_GET['sub1'] : "";
$sub2 = !empty($_GET['sub2']) ? $_GET['sub2'] : "";
$sub3 = !empty($_GET['sub3']) ? $_GET['sub3'] : "";
$sub4 = !empty($_GET['sub4']) ? $_GET['sub4'] : "";
$sub5 = !empty($_GET['sub5']) ? $_GET['sub5'] : "";
$source = !empty($_GET['source']) ? $_GET['source'] : "OgranicPHP";
$affiliate = !empty($_GET['affiliate']) ? $_GET['affiliate'] : "";
$channel_id = !empty($_GET['channel_id']) ? $_GET['channel_id'] : "-1001171589875";
$url = !empty($_GET['url']) ? $_GET['url'] : "";

	// Получение данных канала
	$actionUrl = "https://api.admindashboard.me/api/v2/channels/$channel_id";
	$resp = file_get_contents($actionUrl);

	$data = json_decode($resp);
	$name = $data->model->name;
	$subscribers = $data->model->subscribers;
	$logo = $data->model->logo;
	$description = $data->model->description;

	$desc = str_replace("\n", "<br>", "$description");
	// Получение данных канала

	// // Получение ссылки на канал
	// $actionUrl2 = "https://api.admindashboard.me/api/v2/links?channel_id=$channel_id&affiliate=$affiliate&ip=$ip&sub1=$sub1&sub2=$sub2&sub3=$sub3&sub4=$sub4&sub5=$sub5&source=$source";
	// $response = file_get_contents($actionUrl2);
	//
	// $data = json_decode($response);
	// $link = $data->model->link;
	//
	// $result = explode('+', $link); $result[0]; $result[1];
	// // Получение ссылки на канал
?>

<!DOCTYPE html>
<html class="theme_dark">
<head>
	<base href="">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title><? echo $name?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta property="og:title" content="<? echo $name?>">
	<meta property="og:image" content="<? echo $logo?>">
	<meta property="og:site_name" content="Telegram">
	<meta property="og:description" content="<? echo $desc?>">
	<meta property="twitter:title" content="<? echo $name?>">
	<meta property="twitter:image" content="<? echo $logo?>">
	<meta property="twitter:site" content="@Telegram">
	<meta property="al:ios:app_store_id" content="686449807">
	<meta property="al:ios:app_name" content="Telegram Messenger">
	<meta property="al:ios:url" content="tg://join?invite=<? echo $url?>">
	<meta property="al:android:url" content="tg://join?invite=<? echo $url?>">
	<meta property="al:android:app_name" content="Telegram">
	<meta property="al:android:package" content="org.telegram.messenger">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@Telegram">
	<meta name="twitter:description" content="<? echo $desc?>">
	<meta name="twitter:app:name:iphone" content="Telegram Messenger">
	<meta name="twitter:app:id:iphone" content="686449807">
	<meta name="twitter:app:url:iphone" content="tg://join?invite=<? echo $url?>">
	<meta name="twitter:app:name:ipad" content="Telegram Messenger">
	<meta name="twitter:app:id:ipad" content="686449807">
	<meta name="twitter:app:url:ipad" content="tg://join?invite=<? echo $url?>">
	<meta name="twitter:app:name:googleplay" content="Telegram">
	<meta name="twitter:app:id:googleplay" content="org.telegram.messenger">
	<meta name="twitter:app:url:googleplay" content="https://t.me/+<? echo $url?>">
	<meta name="apple-itunes-app" content="app-id=686449807, app-argument: tg://join?invite=<? echo $url?>">
	<script>
	window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches && document.documentElement && document.documentElement.classList && document.documentElement.classList.add("theme_dark");
	</script>
	<link rel="shortcut icon" href="https://telegram.org/favicon.ico?3" type="image/x-icon">
	<link href="files/css.css" rel="stylesheet" type="text/css">
	<link href="files/bootstrap.css" rel="stylesheet">
	<link href="files/telegram.css" rel="stylesheet" media="screen">
  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?php echo $pixel = !empty($_GET['pixel']) ? $_GET['pixel'] : $_GET['pixel']; ?>');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?php echo $pixel = !empty($_GET['pixel']) ? $_GET['pixel'] : $_GET['gpixel']; ?>&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<body>
	<div class="tgme_background_wrap">
		<canvas id="tgme_background" class="tgme_background default" data-colors="dbddbb,6ba587,d5d88d,88b884" width="50" height="50"></canvas>
		<div class="tgme_background_pattern default"></div>
	</div>
	<div class="tgme_page_wrap">
    <div class="tgme_head_wrap">
			<div class="tgme_head">
				<a href="https://telegram.org/" class="tgme_head_brand">
          <svg class="tgme_logo" height="34" viewBox="0 0 133 34" width="133" xmlns="http://www.w3.org/2000/svg">
              <g fill="none" fill-rule="evenodd">
                <circle cx="17" cy="17" fill="var(--accent-btn-color)" r="17"></circle>
								<path d="m7.06510669 16.9258959c5.22739451-2.1065178 8.71314291-3.4952633 10.45724521-4.1662364 4.9797665-1.9157646 6.0145193-2.2485535 6.6889567-2.2595423.1483363-.0024169.480005.0315855.6948461.192827.1814076.1361492.23132.3200675.2552048.4491519.0238847.1290844.0536269.4231419.0299841.65291-.2698553 2.6225356-1.4375148 8.986738-2.0315537 11.9240228-.2513602 1.2428753-.7499132 1.5088847-1.2290685 1.5496672-1.0413153.0886298-1.8284257-.4857912-2.8369905-1.0972863-1.5782048-.9568691-2.5327083-1.3984317-4.0646293-2.3321592-1.7703998-1.0790837-.212559-1.583655.7963867-2.5529189.2640459-.2536609 4.7753906-4.3097041 4.755976-4.431706-.0070494-.0442984-.1409018-.481649-.2457499-.5678447-.104848-.0861957-.2595946-.0567202-.3712641-.033278-.1582881.0332286-2.6794907 1.5745492-7.5636077 4.6239616-.715635.4545193-1.3638349.6759763-1.9445998.6643712-.64024672-.0127938-1.87182452-.334829-2.78737602-.6100966-1.12296117-.3376271-1.53748501-.4966332-1.45976769-1.0700283.04048-.2986597.32581586-.610598.8560076-.935815z" fill="#fff">
								</path>
								<path d="m49.4 24v-12.562h-4.224v-2.266h11.198v2.266h-4.268v12.562zm16.094-4.598h-7.172c.066 1.936 1.562 2.772 3.3 2.772 1.254 0 2.134-.198 2.97-.484l.396 1.848c-.924.396-2.2.682-3.74.682-3.476 0-5.522-2.134-5.522-5.412 0-2.97 1.804-5.764 5.236-5.764 3.476 0 4.62 2.86 4.62 5.214 0 .506-.044.902-.088 1.144zm-7.172-1.892h4.708c.022-.99-.418-2.618-2.222-2.618-1.672 0-2.376 1.518-2.486 2.618zm9.538 6.49v-15.62h2.706v15.62zm14.84-4.598h-7.172c.066 1.936 1.562 2.772 3.3 2.772 1.254 0 2.134-.198 2.97-.484l.396 1.848c-.924.396-2.2.682-3.74.682-3.476 0-5.522-2.134-5.522-5.412 0-2.97 1.804-5.764 5.236-5.764 3.476 0 4.62 2.86 4.62 5.214 0 .506-.044.902-.088 1.144zm-7.172-1.892h4.708c.022-.99-.418-2.618-2.222-2.618-1.672 0-2.376 1.518-2.486 2.618zm19.24-1.144v6.072c0 2.244-.462 3.85-1.584 4.862-1.1.99-2.662 1.298-4.136 1.298-1.364 0-2.816-.308-3.74-.858l.594-2.046c.682.396 1.826.814 3.124.814 1.76 0 3.08-.924 3.08-3.234v-.924h-.044c-.616.946-1.694 1.584-3.124 1.584-2.662 0-4.554-2.2-4.554-5.236 0-3.52 2.288-5.654 4.862-5.654 1.65 0 2.596.792 3.102 1.672h.044l.11-1.43h2.354c-.044.726-.088 1.606-.088 3.08zm-2.706 2.948v-1.738c0-.264-.022-.506-.088-.726-.286-.99-1.056-1.738-2.2-1.738-1.518 0-2.64 1.32-2.64 3.498 0 1.826.924 3.3 2.618 3.3 1.012 0 1.892-.66 2.2-1.65.088-.264.11-.638.11-.946zm5.622 4.686v-7.26c0-1.452-.022-2.508-.088-3.454h2.332l.11 2.024h.066c.528-1.496 1.782-2.266 2.948-2.266.264 0 .418.022.638.066v2.53c-.242-.044-.484-.066-.814-.066-1.276 0-2.178.814-2.42 2.046-.044.242-.066.528-.066.814v5.566zm16.05-6.424v3.85c0 .968.044 1.914.176 2.574h-2.442l-.198-1.188h-.066c-.638.836-1.76 1.43-3.168 1.43-2.156 0-3.366-1.562-3.366-3.19 0-2.684 2.398-4.07 6.358-4.048v-.176c0-.704-.286-1.87-2.178-1.87-1.056 0-2.156.33-2.882.792l-.528-1.76c.792-.484 2.178-.946 3.872-.946 3.432 0 4.422 2.178 4.422 4.532zm-2.64 2.662v-1.474c-1.914-.022-3.74.374-3.74 2.002 0 1.056.682 1.54 1.54 1.54 1.1 0 1.87-.704 2.134-1.474.066-.198.066-.396.066-.594zm5.6 3.762v-7.524c0-1.232-.044-2.266-.088-3.19h2.31l.132 1.584h.066c.506-.836 1.474-1.826 3.3-1.826 1.408 0 2.508.792 2.97 1.98h.044c.374-.594.814-1.034 1.298-1.342.616-.418 1.298-.638 2.2-.638 1.76 0 3.564 1.21 3.564 4.642v6.314h-2.64v-5.918c0-1.782-.616-2.838-1.914-2.838-.924 0-1.606.66-1.892 1.43-.088.242-.132.594-.132.902v6.424h-2.64v-6.204c0-1.496-.594-2.552-1.848-2.552-1.012 0-1.694.792-1.958 1.518-.088.286-.132.594-.132.902v6.336z" fill="var(--tme-logo-color)" fill-rule="nonzero">
								</path>
              </g>
            </svg>

        </a> <a class="tgme_head_right_btn" href="https://telegram.org/dl">Download</a></div>
		</div>

		<div class="tgme_body_wrap">
			<div class="tgme_page">
				<div class="tgme_page_photo">
					<a onclick="fbq(&quot;track&quot;,&quot;Contact&quot;)" href="tg://join?invite=<? echo $url?>"><img class="tgme_page_photo_image" src="<? echo $logo?>"></a>
				</div>
				<div class="tgme_page_title"><span dir="auto"><? echo $name?></span></div>
				<div class="tgme_page_extra"><? echo $subscribers?> subscribers</div>
				<div class="tgme_page_description"><? echo $desc?></div>
				<div class="tgme_page_action"><a onclick="fbq(&quot;track&quot;,&quot;Contact&quot;)" class="tgme_action_button_new shine"
					href="tg://join?invite=<? echo $url?>">JOIN CHANNEL</a></div>
				<div class="tgme_page_additional">You are invited to the channel <br><strong><? echo $name?></strong>. Click above to join.</div>
			</div>
		</div>

	</div>
	<script src="files/tgwallpaper.js"></script>
	<script type="text/javascript">
	function toggleTheme(e) {
		document.documentElement.classList.toggle("theme_dark", e), window.Telegram && Telegram.setWidgetOptions({
			dark: e
		})
	}
	var url = "tg://join?invite=<? echo $url?>";
	setTimeout(function() {
		fbq("track", "Contact"), window.location = url
	}, 2e3);
	var tme_bg = document.getElementById("tgme_background");
	if(tme_bg && (TWallpaper.init(tme_bg), TWallpaper.animate(!0), window.onfocus = function() {
			TWallpaper.update()
		}), document.body.classList.remove("no_transition"), window.matchMedia) {
		var darkMedia = window.matchMedia("(prefers-color-scheme: dark)");
		toggleTheme(darkMedia.matches), darkMedia.addListener(function(e) {
			toggleTheme(e.matches)
		})
	}
	</script>
	<style>
	.tgme_page {
		padding: 10px
	}

	@media (min-width:1024px) {
		.tgme_body_wrap {
			padding: 100px
		}
	}

	a.tgme_action_button_new,
	a.tgme_head_right_btn {
		background-color: #1c93e3
	}
	</style>
</body>

</html>
