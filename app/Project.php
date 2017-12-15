<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{

  /*private $title;
  private $summ;
  private $authors;
  private $rating;
  private $location;
  private $summary;
  private $descrpition;
  private $collaborators;*/

  protected $fillable = ['title', 'summX', 'summY', 'author', 'rating', 'location',  'summary', 'description', 'created_at', 'updated_at'];

  public function collaborators()
  {
    return $this
      ->belongsToMany(User::class, 'projects_collaborators', 'project_id', 'collaborator_id');
  }

  public function authors()
  {
    return $this->belongsToMany(User::class, 'projects_authors', 'project_id', 'user_id');
  }







}
