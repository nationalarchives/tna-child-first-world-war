/**
 *
 * TNA - FWW js
 *
 */

document.getElementById("research-category").onchange = function() {
    if (this.selectedIndex!==0) {
        window.location.href = this.value;
    }
};