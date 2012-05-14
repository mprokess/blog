/**
 * Presenter, který zajišťuje výpis seznamů úkolů.
 */
class TaskPresenter extends BasePresenter
{

}

private $taskList;

public function actionDefault($id)
{
    $this->taskList = $this->context->createTasklists()->get($id);
    if ($this->taskList === FALSE) {
        $this->setView('notFound');
    }
}

public function renderDefault($id)
{
    $this->template->taskList = $this->taskList;
    $this->template->tasks = $this->taskList->related('task')->order('created');
}
