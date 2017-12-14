var CACHE_NAME = 'frozen-waves-cache2';

var files = [
'./index.php',
'./lib.php',
'./login.php',
'./cadastro.php',
'./admin.php',
'./verifLogin.php',
'./conn.php',
'./logout.php',
'./start.php',
'./configuracoes.php',
'./manifest.json',
'./files.json',
'./executar.php',
'./fw.py',
'./view/css/estilo.css',
'./view/css/style.css',
'./view/css/c3.min.css',
'./view/css/bootstrap.min.css',
'./view/css/font-awesome.min.css',
'./view/fonts/fontawesome-webfont.woff',
'./view/fonts/fontawesome-webfont.woff2',
'./view/fonts/FontAwesome.otf',
'./view/js/app.js',
'./view/js/bootstrap.min.js',
'./view/js/c3.min.js',
'./view/js/d3.min.js',
'./view/js/jquery.min.js',
'./view/js/spin.js',
'./view/img/'
];

self.addEventListener('activate', function(event) {
  console.log('[SW] Activate');
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (CACHE_NAME.indexOf(cacheName) === -1) {
          	console.log('[SW] Delete cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});


self.addEventListener('install', function(event){
	console.log('[SW] Install');
	event.waitUntil(
		caches.open(CACHE_NAME).then(function(cache) {
			return Promise.all(
				files.map(function(file){
					return cache.add(file);
				})
				);
		})
		);
});
// self.addEventListener('install', function(event) {
//   console.log('[SW] Install');
//   event.waitUntil(
//     caches.open(CACHE_NAME)
//       .then(function(cache) {
//         console.log('Opened cache');
//         return cache.addAll(files);
//       })
//   );
// });

self.addEventListener('fetch', function(event) {
	console.log('[SW] fetch ' + event.request.url)
	event.respondWith(
		caches.match(event.request).then(function(response){
			return response || fetch(event.request.clone());
		})
		);
});
