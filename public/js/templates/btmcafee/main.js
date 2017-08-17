//bootstrap device size
function isBreakpoint( alias ) {
    return $('.device-' + alias).is(':visible');
}
$(function(){
	if( isBreakpoint('sm') || isBreakpoint('md') || isBreakpoint('lg') ) {
	    //$('.hero').height($('#content').height());
	}
});
