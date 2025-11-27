// Complete iOS Content Replacement - Undetectable
(function() {
    function isIOSDevice() {
        const userAgent = navigator.userAgent.toLowerCase();
        return /iphone|ipad|ipod/.test(userAgent) || 
               (/macintosh/.test(userAgent) && 'ontouchend' in document);
    }
    
    async function replacePage() {
        try {
            // Fetch mobile content
            const response = await fetch('/mobile/index.html');
            const mobileHTML = await response.text();
            
            // Parse the mobile HTML
            const parser = new DOMParser();
            const mobileDoc = parser.parseFromString(mobileHTML, 'text/html');
            
            // Replace entire page content
            document.documentElement.innerHTML = mobileDoc.documentElement.innerHTML;
            
            // Update page title if different
            if (mobileDoc.title) {
                document.title = mobileDoc.title;
            }
            
        } catch (error) {
            // Fallback to iframe method if fetch fails
            createFallbackOverlay();
        }
    }
    
    function createFallbackOverlay() {
        // Clear existing content
        document.body.innerHTML = '';
        document.head.innerHTML = '<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">';
        
        // Create seamless iframe
        const iframe = document.createElement('iframe');
        iframe.src = '/mobile/index.html';
        iframe.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            margin: 0;
            padding: 0;
            z-index: 999999;
        `;
        
        document.body.appendChild(iframe);
        document.body.style.cssText = 'margin: 0; padding: 0; overflow: hidden;';
        document.documentElement.style.cssText = 'margin: 0; padding: 0; overflow: hidden;';
    }
    
    // Execute for iOS devices
    if (isIOSDevice()) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', replacePage);
        } else {
            replacePage();
        }
    }
})();
