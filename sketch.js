var api_path = 'https://api.nytimes.com/svc/search/v2/articlesearch.json?q=';
var api_id = '&api-key=Qqqlc1V3PhGCI4nPui4Q4A2eBGEzFdVa';


var input;

function setup()
{
	noCanvas();
	var button = select('#submit');	

	button.mousePressed(search);

	input = select('#article');
}


function search()
{	



var url = api_path + input.value() + api_id;


loadJSON(url,gotData);




}





function gotData(data)
{

var articles = data.response.docs;



for(var i = 0;i < articles.length;i++)
{



createElement('h1' ,articles[i].headline.main);
createP(articles[i].snippet);

load = articles[i].multimedia.url;
  createImg(load);
}

}
