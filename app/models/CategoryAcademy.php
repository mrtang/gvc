<?php
class CategoryAcademy extends Eloquent {
    
	protected $table = 'zz_category_academy';
    protected $primaryKey = 'id';
    
	/**
	 * Get Media
	 * @author Duc Nguyen
	 */
	public function media() {
		return $this->belongsTo('Media');
	}
	
    /**
     * search new by title
     * @author Thuan Truong
     */
    public function searchNew($input) {
        $query = CategoryAcademy::query();
        $appends = array();
        
        if (!empty($input['title'])) {
            $query->where('name', 'LIKE', '%'.$input['title'].'%');
            $appends['title'] = $input['title'];
        }
        
        $query->orderBy('created_at', 'desc')->get();
        
        $news = $query->paginate(12)->appends($appends);
        return $news;
    }
    
    /**
     * get total record
     * @author Thuan Truong
     */
    public function getTotalRecords($input) {
        $query = CategoryAcademy::query();
        
        if (!empty($input['title'])) {
            $query->where('name', 'LIKE', '%'.$input['title'].'%');
        }
        
        $totalRecords = $query->count();
        
        return $totalRecords;
    }
    
    
    /**
     * Validate input create, update new & promotion
     * @author Thuan Truong
     * @param input
     * @return array
     */
    public function validate($input) {
        $rules = array(
            'title' => 'required|max:250',
            'summary' => 'required|max:30000',
            'file' => 'required'
        );
        $validator = Validator::make($input, $rules);
        return $validator;
    }
    
    /**
     * Create new or promotion
     * @author Thuan Truong
     * @param input
     */
    public function createNew($input) {
        if (!empty($input['file']))
            $media =  $input['file'];
        else {
            $media = '';
        }
             
        $new = new CategoryAcademy; // create new with lang = en
        $new->slug = BaseController::sanitizeStringForUrl($input['title']);
        $new->name = $input['title'];
        $new->summary = $input['summary'];
        $new->media_id = $media;
        $new->save();
        
    }

    /**
     * Update News
     * @author Thuan Truong
     * @param input form
     * @return none
     */
    public function updateNew($input, $id) {
        if (!empty($input['file']))
            $media =  $input['file'];
        else {
            $media = '';
        }
        
        $new = CategoryAcademy::find($id); 
        $new->slug = BaseController::sanitizeStringForUrl($input['title']);
        $new->name = $input['title'];
        $new->summary = $input['summary'];
        $new->media_id = $media;
        $new->update();
        
    }
    
}