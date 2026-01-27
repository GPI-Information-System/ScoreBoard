(function () {
  const body = document.body;
  let lastFocused = null;

  function createBackdrop() {
    const el = document.createElement("div");
    el.className = "modal-backdrop";
    return el;
  }

  function getFocusable(container) {
    return Array.from(
      container.querySelectorAll(
        'a[href], area[href], input:not([disabled]):not([type="hidden"]), select:not([disabled]), ' +
          "textarea:not([disabled]), button:not([disabled]), iframe, object, embed, " +
          '[tabindex]:not([tabindex="-1"]), [contenteditable="true"]',
      ),
    ).filter((el) => el.offsetParent !== null || el === document.activeElement);
  }

  function openModal(modal) {
    if (!modal) return;

    lastFocused = document.activeElement;

    // Backdrop
    const backdrop = createBackdrop();
    backdrop.dataset.for = modal.id;
    document.body.appendChild(backdrop);

    // Show
    modal.classList.add("show");
    modal.setAttribute("aria-hidden", "false");
    body.classList.add("body-modal-open");

    // Focus first focusable (or close button)
    const focusables = getFocusable(modal);
    const fallback = modal.querySelector(".close") || modal;
    (focusables[0] || fallback).focus({ preventScroll: true });

    // Focus trap
    function handleKeydown(e) {
      if (e.key === "Escape" || e.keyCode === 27) {
        // static backdrop -> ignore Escape to close
        e.preventDefault();
        return;
      }
      if (e.key === "Tab" || e.keyCode === 9) {
        const items = getFocusable(modal);
        if (!items.length) {
          e.preventDefault();
          return;
        }
        const first = items[0];
        const last = items[items.length - 1];
        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    }

    function backdropClick(e) {
      // static backdrop: ignore outside clicks; only clicks inside content should be actionable
      const content = modal.querySelector(".modal-content");
      if (!content.contains(e.target)) {
        // Ignore (no shake animation here; add one if desired)
        e.stopPropagation();
      }
    }

    modal.addEventListener("keydown", handleKeydown);
    modal.addEventListener("mousedown", backdropClick);

    // Store listeners so we can remove them on close
    modal._listeners = { handleKeydown, backdropClick };
  }

  function closeModal(modal) {
    if (!modal) return;

    const backdrop =
      document.querySelector(`.modal-backdrop[data-for="${modal.id}"]`) ||
      document.querySelector(".modal-backdrop");

    modal.classList.remove("show");
    modal.setAttribute("aria-hidden", "true");
    body.classList.remove("body-modal-open");

    if (backdrop && backdrop.parentNode)
      backdrop.parentNode.removeChild(backdrop);

    // Remove event listeners
    if (modal._listeners) {
      modal.removeEventListener("keydown", modal._listeners.handleKeydown);
      modal.removeEventListener("mousedown", modal._listeners.backdropClick);
      delete modal._listeners;
    }

    // Return focus
    if (lastFocused && typeof lastFocused.focus === "function") {
      lastFocused.focus({ preventScroll: true });
    }
  }

  // Open via [data-toggle="modal"][data-target="#id"]
  document.addEventListener("click", function (e) {
    const trigger = e.target.closest('[data-toggle="modal"][data-target]');
    if (!trigger) return;
    e.preventDefault();
    const sel = trigger.getAttribute("data-target");
    const modal = document.querySelector(sel);
    if (modal) openModal(modal);
  });

  // Close via [data-dismiss="modal"]
  document.addEventListener("click", function (e) {
    const dismiss = e.target.closest('[data-dismiss="modal"]');
    if (!dismiss) return;
    const modal = e.target.closest(".modal");
    if (modal) closeModal(modal);
  });

  // Confirm action example
  document.addEventListener("click", function (e) {
    if (e.target.id === "deleteAccountSubmit") {
      const modal = e.target.closest(".modal");
      // TODO: put your delete logic here
      console.log("Confirmed delete");
      closeModal(modal);
    }
  });

  // Initialize aria-hidden
  document.querySelectorAll(".modal").forEach((m) => {
    if (!m.hasAttribute("aria-hidden")) m.setAttribute("aria-hidden", "true");
  });
})();
