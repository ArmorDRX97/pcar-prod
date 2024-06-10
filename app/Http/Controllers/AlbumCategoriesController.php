<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlbumCategoryRequest;
use App\Http\Requests\UpdateAlbumCategoryRequest;
use App\Models\Album;
use App\Models\AlbumCategory;
use App\Models\Language;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AlbumCategoriesController extends AppBaseController
{
    /**
     * @param  Request  $request
     * @return Application|Factory|View
     *
     * @throws \Exception
     */
    public function index(Request $request)
    {
        $albums = Album::orderBy('name', 'ASC')->pluck('name', 'id');
        $languages = Language::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('album_category.index', compact('albums', 'languages'));
    }

    /**
     * @param  CreateAlbumCategoryRequest  $request
     * @return mixed
     */
    public function store(CreateAlbumCategoryRequest $request)
    {
        $input = $request->all();
        $albumCategory = AlbumCategory::create($input);

        return $this->sendSuccess(__('messages.placeholder.album_category_created_successfully'));
    }

    /**
     * @param  AlbumCategory  $albumCategory
     * @return JsonResponse
     */
    public function edit(AlbumCategory $albumCategory)
    {
        return $this->sendResponse($albumCategory, __('messages.placeholder.album_category_retrieved_successfully'));
    }

    /**
     * @param  UpdateAlbumCategoryRequest  $request
     * @param  AlbumCategory  $albumCategory
     * @return mixed
     */
    public function update(UpdateAlbumCategoryRequest $request, AlbumCategory $albumCategory)
    {
        $input = $request->all();
        $albumCategory->update($input);

        return $this->sendSuccess(__('messages.placeholder.album_category_updated_successfully'));
    }

    /**
     * @param  AlbumCategory  $albumCategory
     * @return JsonResponse
     */
    public function destroy(AlbumCategory $albumCategory)
    {
        $gallery = AlbumCategory::findOrFail($albumCategory->id)->gallery->first();
        if (! empty($gallery)) {
            return $this->sendError(__('messages.placeholder.this_album_category_is_in_use'));
        }

        $albumCategory->delete();

        return $this->sendSuccess(__('messages.placeholder.album_category_deleted_successfully'));
    }
}
