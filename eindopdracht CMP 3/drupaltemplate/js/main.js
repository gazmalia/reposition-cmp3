

// Anonymous function executed when document loaded
(function() {
	
	// Describe an App object with own functionalities
	var App = {
		init: function() {
			var self = this;
			

			
			this._dataportfolio = null;// Variable for the list of portfolio


			// Handlebars Cache
			this._hbsCache = {};// Handlebars cache for templates
			this._hbsPartialsCache = {};// Handlebars cache for partials

			// Create a clone from the JayWalker object
			this._jayWalker = JayWalker;
			this._jayWalker.init();

			
			this.registerNavigationToggleListeners();// Register All Navigation Toggle Listeners
			
			this.registerWindowListeners();// Register All Navigation Toggle Listeners
			
			// Register listeners for list layout
			this.registerListenersForListLayout();
			

		},
		registerNavigationToggleListeners: function() {
			var toggles = document.querySelectorAll('.navigation-toggle');
			
			if(toggles != null && toggles.length > 0) {
				var toggle = null;
				
				for(var i = 0; i < toggles.length; i++ ) {
					toggle = toggles[i];
					toggle.addEventListener('click', function(ev) {
						ev.preventDefault();
						
						document.querySelector('body').classList.toggle(this.dataset.navtype);
						
						return false;
					});	
				}
			}
		}

	};
	
	App.init();// Intialize the application
	
})();