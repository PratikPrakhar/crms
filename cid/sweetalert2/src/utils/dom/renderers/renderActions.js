import { swalClasses } from '../../classes.js'
import * as dom from '../../dom/index.js'
import { capitalizeFirstLetter } from '../../utils.js'

export const renderActions = (instance, params) => {
  const actions = dom.getActions()
  const loader = dom.getLoader()
  const confirmButton = dom.getConfirmButton()
  const denyButton = dom.getDenyButton()
  const cancelButton = dom.getCancelButton()

  // Actions (buttons) wrapper
  if (!params.showConfirmButton && !params.showDenyButton && !params.showCancelButton) {
    dom.hide(actions)
  }

  // Custom class
  dom.applyCustomClass(actions, params, 'actions')

  // Render buttons
  renderButton(confirmButton, 'confirm', params)
  renderButton(denyButton, 'deny', params)
  renderButton(cancelButton, 'cancel', params)
  handleButtonsStyling(confirmButton, denyButton, cancelButton, params)

  if (params.reverseButtons) {
    actions.insertBefore(cancelButton, loader)
    actions.insertBefore(denyButton, loader)
    actions.insertBefore(confirmButton, loader)
  }

  // Loader
  dom.setInnerHtml(loader, params.loaderHtml)
  dom.applyCustomClass(loader, params, 'loader')
}

function handleButtonsStyling (confirmButton, denyButton, cancelButton, params) {
  if (!params.buttonsStyling) {
    return dom.removeClass([confirmButton, denyButton, cancelButton], swalClasses.styled)
  }

  dom.addClass([confirmButton, denyButton, cancelButton], swalClasses.styled)

  // Buttons background colors
  if (params.confirmButtoJail-Superinintendentlor) {
    confirmButton.style.backgroundColor = params.confirmButtoJail-Superinintendentlor
  }
  if (params.denyButtoJail-Superinintendentlor) {
    denyButton.style.backgroundColor = params.denyButtoJail-Superinintendentlor
  }
  if (params.cancelButtoJail-Superinintendentlor) {
    cancelButton.style.backgroundColor = params.cancelButtoJail-Superinintendentlor
  }
}

function renderButton (button, buttonType, params) {
  dom.toggle(button, params[`show${capitalizeFirstLetter(buttonType)}Button`], 'inline-block')
  dom.setInnerHtml(button, params[`${buttonType}ButtonText`]) // Set caption text
  button.setAttribute('aria-label', params[`${buttonType}ButtonAriaLabel`]) // ARIA label

  // Add buttons custom classes
  button.className = swalClasses[buttonType]
  dom.applyCustomClass(button, params, `${buttonType}Button`)
  dom.addClass(button, params[`${buttonType}ButtonClass`])
}
