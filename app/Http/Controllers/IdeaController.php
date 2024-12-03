<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController
{
    /**
     * Handles the creation of a new Idea.
     *
     * Validates the incoming request to ensure 'content' is between 5 and 255 characters.
     * If validation passes, creates a new Idea record in the database.
     * Redirects the user to the dashboard with a success message upon completion.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $validated = request()->validate([
            'content' => 'required|min:5|max:255',
        ]);

        $idea = new Idea($validated);

        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }

    /**
     * Handles the deletion of an Idea.
     *
     * Locates the Idea by ID, ensuring it exists, and then deletes it.
     * Redirects to the dashboard with a success message once deletion is complete.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $idea = Idea::where('id', $id)->firstOrFail()->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }

    /**
     * Displays a specific Idea.
     *
     * Returns a view showing the details of the specified Idea instance.
     * The 'show' view receives the 'idea' object as data.
     *
     * @param \App\Models\Idea $idea
     * @return \Illuminate\View\View
     */
    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }

    /**
     * Displays the edit form for an Idea.
     *
     * Sets an 'editing' variable to true to indicate that the user is in editing mode.
     * Returns the same view as 'show', passing 'editing' and 'idea' as variables.
     *
     * @param \App\Models\Idea $idea
     * @return \Illuminate\View\View
     */
    public function edit(Idea $idea)
    {
        $editing = true;

        return view('ideas.show', compact('editing', 'idea'));
    }

    /**
     * Updates an existing Idea.
     *
     * Validates the incoming request to ensure 'content' is between 5 and 255 characters.
     * Updates the 'content' field of the specified Idea and saves it back to the database.
     * Redirects the user to the 'show' view of the updated Idea with a success message.
     *
     * @param \App\Models\Idea $idea
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Idea $idea)
    {
        $validated = request()->validate([
            'content' => 'required|min:5|max:255',
        ]);

        $idea->update($validated);

        return redirect()
            ->route('ideas.show', $idea->id)
            ->with('success', 'Idea updated successfully!');
    }
}
