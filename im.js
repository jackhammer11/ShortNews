var url = 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=ac75a62d5faa44c5a8717affc7085a49';

var article;

function setup() {
  createCanvas(720, 400);
  loadJSON(url,draw);
  // Load the image
}

function draw(data) {

article = data.articles;

  var img = loadImage(article[1].urlToImage); 
  image(img, 0, 0);
  
  image(img, 0, height / 2, img.width / 2, img.height / 2);
}

