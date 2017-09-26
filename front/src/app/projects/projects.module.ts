import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { SharedModule } from "../shared/shared.module";
import { KanbanBoardComponent } from './kanban-board/kanban-board.component';
import { GridBoardComponent } from './grid-board/grid-board.component';
import { TasksComponent } from './tasks/tasks.component';
import { TaskComponent } from './task/task.component';

@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    RouterModule.forChild([
      { path: 'kanban-board', component: KanbanBoardComponent },
      { path: 'grid-board', component: GridBoardComponent },
      { path: 'tasks', component: TasksComponent },
      { path: 'task', component: TaskComponent }
    ])
  ],
  declarations: [
    KanbanBoardComponent, 
    GridBoardComponent, 
    TasksComponent, 
    TaskComponent
  ]
})
export default class ProjectsModule { }
