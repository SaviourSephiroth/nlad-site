$( document ).ready(function() {
	var feedurl = "http://accanlac.blogspot.com/feeds/posts/default";
	
    $.ajax({
        type: "GET",
        url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=1000&callback=?&q=' + encodeURIComponent(feedurl),
        dataType: 'json',
        error: function(){
            alert('Unable to load feed, Incorrect path or invalid feed');
        },
        success: function(data){
        	var blogContainer = $("#blog");
        	var self = this;
        	self.getDiv = function(){
				return $("<div></div>");
			};

            $.each(data.responseData.feed.entries, function (i, e) {
            	var d = self.getDiv();//document.createElement("div");
  				var title = self.getDiv();
  				var content = self.getDiv();
  				var date = self.getDiv();
  				var author = self.getDiv();

  				d.addClass("blog");
  				title.addClass("blog-title");
  				title.text(e.title);
  				content.addClass("blog-content");
  				content.html(e.content);
  				date.addClass("blog-date");
  				date.text(e.publishedDate);
  				author.addClass("blog-author");
  				author.text(e.author);
  				

  				d.append(title);
  				d.append(date);
  				d.append(author);
  				d.append(content);

  				var tags = self.getDiv();
  				tags.addClass("blog-tags");
  				var categories = e.categories;
  				for(var n = 0; n < categories.length; n++){
  					var bh = $("<div class='blog-hashtag'></div>");
  					bh.text("#" + categories[n]);
  					tags.append(bh)
  				}
  				
  				d.append(tags);
  				
		        $("#blog").append(d);

		        console.log(e);

		      });

        }
    });  
});