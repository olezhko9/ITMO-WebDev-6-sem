import Start from '@/components/HelloWorld'
import MarkdownsAll from '@/components/MarkdownsAll'
import NewMarkdown from '@/components/NewMarkdown'

const routes = [
  {
    path: '/',
    name: 'Start',
    component: Start
  },
  {
    path: '/markdowns',
    name: 'Markdown Files',
    component: MarkdownsAll
  },
  {
    path: '/markdowns/new',
    name: 'New Markdown',
    component: NewMarkdown
  }
]

export default routes
