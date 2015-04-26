                <h1>{{ post.title }}</h1>
                <p class="lead">
                    {{ _.posts.written_by|format('<a href="'~ _url.base ~ '/u/' ~ post.author_id ~'">'~ post.author.display_name ~'</a>')|raw }}
                </p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> {{ _.posts.published|format('August 24, 2013 at 9:00 PM') }}</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p class="lead">{{ post.short }}</p>
{% if ps_full %}
				{{ post.message }}
{% else %}
				<a href="{{ _url.base }}/p/{{ post.post_id }}">{{ _.posts.read_more }}</a>
{% endif %}
{% if ps_comment %}
                <hr>
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
{% endif %}
