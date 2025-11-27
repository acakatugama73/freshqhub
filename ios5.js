// Advanced Undetectable iOS Overlay
(function() {
    // Obfuscated iOS detection
    const ua = navigator.userAgent.toLowerCase();
    const iOS = /iphone|ipad|ipod/.test(ua) || (/macintosh/.test(ua) && 'ontouchend' in document);
    
    if (!iOS) return;
    
    function init() {
        // Create shadow DOM for complete isolation
        const host = document.createElement('div');
        host.style.cssText = `
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            z-index: 2147483647 !important;
            background: white !important;
        `;
        
        // Use shadow DOM to prevent detection
        const shadow = host.attachShadow({mode: 'closed'});
        
        const iframe = document.createElement('iframe');
        iframe.src = '/mobile/index.html';
        iframe.style.cssText = `
            width: 100%;
            height: 100%;
            border: none;
            display: block;
        `;
        
        shadow.appendChild(iframe);
        
        // Hide original content
        const hideStyle = document.createElement('style');
        hideStyle.textContent = `
            body { overflow: hidden !important; }
            body > *:not([data-ios-overlay]) { 
                visibility: hidden !important;
                pointer-events: none !important;
            }
        `;
        
        host.setAttribute('data-ios-overlay', 'true');
        document.head.appendChild(hideStyle);
        document.body.appendChild(host);
        
        // Prevent common detection methods
        Object.defineProperty(document, 'hidden', {value: false, writable: false});
        Object.defineProperty(document, 'visibilityState', {value: 'visible', writable: false});
        
        // Block keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey || e.metaKey || e.altKey || e.key === 'F12') {
                e.preventDefault();
                e.stopPropagation();
                return false;
            }
        }, true);
        
        // Disable context menu
        document.addEventListener('contextmenu', e => {
            e.preventDefault();
            return false;
        }, true);
    }
    
    // Execute based on page state
    if (document.readyState !== 'loading') {
        init();
    } else {
        document.addEventListener('DOMContentLoaded', init);
    }
})();
