<!-- start post Reaction -->
@if(getSettingValue()['emoji_system'])
<div class="post-reaction-div">
    <div class="row">
        <div class="post-reaction">
            <h4 class="title-reactions mt-3 mb-3">{{ __('blog.what_reaction') }}</h4>
            @foreach($emojis as $emoji)
                <div class="emoji">
                    <div>
                        <div class="d-block position-relative text-center float-left post-reaction-item">
                        <span class="emoji-id" data-emoji="{{$emoji->id}}"
                              data-post="{{$postDetail->id}}"> {{ html_entity_decode($emoji->emoji) }}</span>
                            <label class="post-reaction-count  like-reaction" id="{{$emoji->id}}">{{isset($countEmoji[$emoji->id]) ? count($countEmoji[$emoji->id]) : 0}}</label>
                            <p class="post-reaction-text">{{ __('messages.reaction.'.$emoji->name) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- end post Reaction -->
