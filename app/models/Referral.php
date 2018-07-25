<?php
class Referral extends Eloquent {
    
	protected $table = 'zz_referral';
    protected $primaryKey = 'id';
    
    public function saveReferral($input) { 
        $new = new Referral; 
        $new->user_id = $input['user_id'];
        $new->user_name = $input['user_name'];
        $new->ref_id = $input['ref_id'];
        $new->ref_name = $input['ref_name'];
        $new->save();
    }
}