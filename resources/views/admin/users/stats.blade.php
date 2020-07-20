<div>
    <h3 class="lead"></h3>
    @if($total)
        <div class="progress-group">
            <span class="progress-text">Published ({{ $publishdRatio = round(($published/$total) *100, 0) }}%)</span>
            <span class="progress-number"><b>{{ $published }}/ {{ $total }}</b></span>

            <div class="progress-sm">
                <div class="progress-bar progress-bar-green"></div>
            </div>
        </div>
        <div class="progress-group">
            <span class="progress-text">Draft ({{ $draftRatio = round(($draft/$total) *100, 0) }}%)</span>
            <span class="progress-number"><b>{{ $draft }}/ {{ $total }}</b></span>

            <div class="progress-sm">
                <div class="progress-bar progress-bar-red">{{ $draftRatio }}%</div>
            </div>
        </div>
        <div class="pull-right">
            <a href="{{url('cms', ['module', 'post_id'])}}}">View Posts</a>
        </div>
        <div class="clearfix"></div>

    @else
        <div class="well">
            No Posts
        </div>
    @endif
</div>
