<div class="row">
    <div class="col-md-12">
        <form action="{{ route('comment.store', ['task' => $task->id]) }}" method="post">

            <label class="form-group" for="body">Leave comment:</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Leave your comment here..."></textarea>

            <input type="submit" class="btn btn-primary" value="Comment!">

        </form>
    </div>
</div>