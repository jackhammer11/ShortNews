var url = 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=ac75a62d5faa44c5a8717affc7085a49';
var load;
var img;
var article;
function setup(){

 noCanvas();

loadJSON(url,gotData);

}
function gotData(data){

article = data.articles;
for(var i = 0;i < article.length;i++){
createElement('h1' ,article[i].title);
createP(article[i].author);
createP(article[i].description);

load = article[i].urlToImage;
  createImg(load);
  
}

}

