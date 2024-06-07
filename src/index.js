import React from 'react'
import { createRoot } from 'react-dom/client'

import CollapsePanel from './scripts/CollapsePanel'
import NavControl from './scripts/NavControl'
import ModalNoScroll from './scripts/ModalNoScroll'
import ThemeSuccess from './scripts/ThemeSuccess'
import ContactTabs from './scripts/ContactTabs'

new CollapsePanel()
new NavControl()
new ModalNoScroll()

createRoot(document.getElementById('theme-success')).render(<ThemeSuccess />)
