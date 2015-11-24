
var JayWalker = {
	init: function() {
		this._router = crossroads;// Clone the crossroads object
		this._hasher = hasher;// Clone the hasher object
		this.initRouter();// Initialize the router and hasher

		// Events with signals

	},
	initRouter: function() {
		var self = this;

		// Router settings: Register routes
		var homeRoute = this._router.addRoute('/', function() {
			self.setActivePage('portfolio');
		});
		var sectionRoute = this._router.addRoute('/{section}');// Add section route to the router (crossroads)
		sectionRoute.matched.add(function(section) {
			self.setActivePage(section);
		});
		var sectionDetailRoute = this._router.addRoute('/{section}/{subSection}{id}');// Add section detail route to the router (crossroads)
		sectionDetailRoute.matched.add(function(section, subSection, id) {
			self.setActivePage(section + '_' + subSection);

		});

		//Hasher settings
		this._hasher.initialized.add(function(newHash, oldHash) {
			self._router.parse(newHash);
		});// Parse initial hash
		this._hasher.changed.add(function(newHash, oldHash) {
			self._router.parse(newHash);
			if(document.querySelector('body').classList.contains('offcanvas-open')) {
				document.querySelector('body').classList.remove('offcanvas-open');
			}

			if(document.querySelector('body').classList.contains('headernav-open')) {
				document.querySelector('body').classList.remove('headernav-open');
			}
		});// Parse changes in the hash
		this._hasher.init();// Start listening to the hashes
	},
	setActivePage: function(pageId) {
		var pages = document.querySelectorAll('.page');
		if(pages != null && pages.length > 0) {
			var page = null;
			for(var i = 0; i < pages.length;i++) {
				page = pages[i];

				if(page.id == pageId) {
					page.classList.add('active');
				} else {
					page.classList.remove('active');
				}
			}
		}
	}
};