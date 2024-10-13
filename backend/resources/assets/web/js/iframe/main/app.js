$.get( "/api/leagues/inplay", function( data ) {
	console.log(data);
	League.addAllAndDraw('inplay', data.data)
  //alert( "Load was performed." );
});

function main() {
	
}