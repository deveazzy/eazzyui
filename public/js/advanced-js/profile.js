/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

// import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";
import { galleryData } from "../data/gallery-data.js";
import { productData } from "../data/product-data.js";

document.addEventListener("DOMContentLoaded", () => {
  const masonryInstances = {};

  const init = () => {
    //createIcons({ icons });
    lucide.createIcons();
    initTabs();
    initTimeline();
    setupGallery();
    setupProducts();
    initTinyMCE();
    initEditProfileModal();
  };

  const initEditProfileModal = () => {
    const modal = document.getElementById("edit-profile-modal");
    if (!modal) return;
    const openBtn = document.getElementById("edit-profile-btn");
    const closeBtns = modal.querySelectorAll(".modal-close-btn");
    const modalOverlay = modal.querySelector(".modal-overlay");
    if (openBtn) {
      openBtn.addEventListener("click", openModal);
    } else {
      console.warn('Tombol dengan id "edit-profile-btn" tidak ditemukan.');
    }
    if (closeBtns) {
      closeBtns.forEach((btn) => {
        btn.addEventListener("click", closeModal);
      });
    }
    if (modalOverlay) {
      modalOverlay.addEventListener("click", closeModal);
    }
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && !modal.classList.contains("invisible")) {
        closeModal();
      }
    });
    function openModal() {
      modal.classList.remove("invisible", "pointer-events-none");
      modal.classList.add("opacity-100");
      modal.classList.remove("opacity-0");
      modal.querySelector(".modal-content").classList.add("scale-100");
      modal.querySelector(".modal-content").classList.remove("scale-95");
    }
    function closeModal() {
      modal.classList.add("opacity-0");
      modal.classList.remove("opacity-100");
      modal.querySelector(".modal-content").classList.add("scale-95");
      modal.querySelector(".modal-content").classList.remove("scale-100");
      setTimeout(() => {
        modal.classList.add("invisible", "pointer-events-none");
      }, 300);
    }
  };

  const initTinyMCE = () => {
    if (typeof tinymce !== "undefined") {
      tinymce.init({
        selector: "#tinymce-editor",
        plugins: "autoresize link lists",
        license_key: "gpl",
        toolbar: "bold italic | bullist numlist | link",
        menubar: false,
        min_height: 120,
        statusbar: false,
        branding: false,
        content_style:
          "body { font-family: Inter, sans-serif; font-size:14px; }",
      });
    }
  };

  const initTabs = () => {
    const tabsContainer = document.getElementById("profile-tabs");
    if (!tabsContainer) return;
    const buttons = tabsContainer.querySelectorAll(".tab-button");
    const panels = document.querySelectorAll(".tab-panel");
    tabsContainer.addEventListener("click", (e) => {
      const button = e.target.closest(".tab-button");
      if (!button) return;
      panels.forEach((p) => {
        p.classList.remove("active");
        p.classList.add("hidden");
      });
      buttons.forEach((btn) => btn.classList.remove("active"));
      const targetPanel = document.querySelector(button.dataset.tabTarget);
      button.classList.add("active");
      if (targetPanel) {
        targetPanel.classList.add("active");
        targetPanel.classList.remove("hidden");
      }
      buttons.forEach((btn) => {
        btn.classList.remove("text-blue-700", "bg-blue-50");
        btn.classList.add(
          "text-gray-600",
          "hover:bg-gray-100",
          "hover:text-gray-900"
        );
        const icon = btn.querySelector("i");
        if (icon) {
          icon.classList.remove("text-blue-700");
          icon.classList.add("text-gray-400", "group-hover:text-gray-500");
        }
      });
      button.classList.add("text-blue-700", "bg-blue-50");
      button.classList.remove(
        "text-gray-600",
        "hover:bg-gray-100",
        "hover:text-gray-900"
      );
      const activeIcon = button.querySelector("i");
      if (activeIcon) {
        activeIcon.classList.add("text-blue-700");
        activeIcon.classList.remove(
          "text-gray-400",
          "group-hover:text-gray-500"
        );
      }
      setTimeout(() => {
        if (targetPanel && targetPanel.id === "gallery-panel") {
          if (!masonryInstances["#gallery-grid"]) {
            initializeMasonryInstance(
              "#gallery-grid",
              "grid-item",
              "#gallery-grid"
            );
          } else {
            masonryInstances["#gallery-grid"].layout();
          }
        } else if (targetPanel && targetPanel.id === "products-panel") {
          if (!masonryInstances["#product-grid"]) {
            initializeMasonryInstance(
              "#product-grid",
              "grid-item",
              "#product-grid"
            );
          } else {
            masonryInstances["#product-grid"].layout();
          }
        }
      }, 50);
    });
  };

  const initSplideModal = (data, startIndex, type = "gallery") => {
    const modal = document.getElementById("splide-modal");
    const splideList = modal.querySelector(".splide__list");
    const closeModalBtn = document.getElementById("splide-modal-close");
    let splideInstance = null;
    splideList.innerHTML = data
      .map((item) => {
        const imageUrl = type === "gallery" ? item.imageUrl : item.imageUrl;
        return `<li class="splide__slide flex items-center justify-center"><img data-splide-lazy="${imageUrl}" alt="${item.title}" class="max-h-full max-w-full w-auto h-auto object-contain"></li>`;
      })
      .join("");
    modal.classList.remove("opacity-0", "invisible", "pointer-events-none");
    splideInstance = new Splide("#splide-main", {
      type: "loop",
      start: startIndex,
      lazyLoad: "nearby",
      heightRatio: 0.7,
      pagination: true,
      arrows: true,
    }).mount();
    const closeModal = () => {
      modal.classList.add("opacity-0", "invisible", "pointer-events-none");
      if (splideInstance) {
        splideInstance.destroy(true);
        splideInstance = null;
      }
    };
    closeModalBtn.onclick = closeModal;
    modal.onclick = (event) => {
      if (
        event.target === modal ||
        !event.target.closest(".splide-modal-container")
      ) {
        closeModal();
      }
    };
  };

  const initTimeline = () => {
    const container = document.getElementById("post-timeline-container");
    if (!container) return;
    document.getElementById("create-post-btn").addEventListener("click", () => {
      const content = tinymce
        .get("tinymce-editor")
        .getContent({ format: "html" });
      if (content.trim()) {
        renderNewPost(content, container, true);
        tinymce.get("tinymce-editor").setContent("");
      }
    });
    container.addEventListener("click", (e) => {
      const likeBtn = e.target.closest(".like-btn");
      if (likeBtn) likeBtn.classList.toggle("liked");
      const deletePostBtn = e.target.closest(".delete-post-btn");
      if (deletePostBtn) deletePostBtn.closest(".post-item").remove();
      const deleteCommentBtn = e.target.closest(".delete-comment-btn");
      if (deleteCommentBtn) deleteCommentBtn.closest(".comment-item").remove();
    });
    container.addEventListener("keypress", (e) => {
      const commentInput = e.target;
      if (
        commentInput.matches(".comment-input") &&
        e.key === "Enter" &&
        commentInput.value.trim()
      ) {
        e.preventDefault();
        const commentsContainer = commentInput
          .closest(".post-item")
          .querySelector(".comments-list");
        renderNewComment(commentInput.value, commentsContainer);
        commentInput.value = "";
      }
    });
  };

  const renderNewPost = (content, container, prepend = true) => {
    const postHTML = `
      <div class="post-item">
        <div class="post-header mb-4">
          <img src="/assets/images/profile.png" alt="Avatar" class="avatar">
          <div class="info">
            <div class="flex items-center gap-2">
              <p class="font-bold text-gray-800">EazZy Project</p>
              <span class="user-badge admin">Admin</span>
            </div>
            <p class="text-xs text-gray-500">beberapa saat yang lalu</p>
          </div>
          <div class="post-menu">
             <button class="text-blue-300 hover:text-blue-600" title="Edit"><i data-lucide="edit" class="w-4 h-4"></i></button>
             <button class="delete-post-btn text-red-300 hover:text-red-500" title="Hapus"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
          </div>
        </div>
        <div class="post-body">
            <div class="timeline-line"></div>
            <div class="post-content-wrapper">
                <div class="prose max-w-none">${content}</div>
                <div class="post-actions">
                  <button class="like-btn">
                    <i data-lucide="heart" class="w-4 h-4"></i> <span>0</span>
                  </button>
                  <button>
                    <i data-lucide="message-square" class="w-4 h-4"></i> <span>0</span>
                  </button>
                </div>
                <div class="comment-section">
                  <div class="comments-list"></div>
                  <div class="comment-input-wrapper">
                    <img src="/assets/images/profile.png" alt="Avatar" class="avatar">
                    <input type="text" placeholder="Tulis komentar..." class="comment-input">
                  </div>
                </div>
            </div>
        </div>
      </div>`;
    if (prepend) container.insertAdjacentHTML("afterbegin", postHTML);
    else container.insertAdjacentHTML("beforeend", postHTML);
    //createIcons({ icons });
    lucide.createIcons();
  };

  const renderNewComment = (content, container) => {
    const commentHTML = `
      <div class="comment-item">
        <img src="/assets/images/profile.png" alt="Avatar" class="avatar">
        <div class="comment-body">
            <div class="comment-header">
                <p class="font-semibold text-sm text-gray-800">Pengguna</p>
                <span class="user-badge guest">Guest</span>
                <button class="delete-comment-btn text-red-300" title="Hapus komentar"><i data-lucide="x" class="w-3 h-3"></i></button>
            </div>
            <p class="text-sm text-gray-600 mt-1">${content}</p>
        </div>
      </div>`;
    container.insertAdjacentHTML("beforeend", commentHTML);
    //createIcons({ icons });
    lucide.createIcons();
  };

  const setupMasonryGrid = (grid, filters, msnryInstance) => {
    filters.addEventListener("click", (e) => {
      if (!e.target.matches("button")) return;
      const filterValue = e.target.getAttribute("data-filter");
      const currentChecked = filters.querySelector(".is-checked");
      if (currentChecked) currentChecked.classList.remove("is-checked");
      e.target.classList.add("is-checked");
      const items = grid.querySelectorAll(".grid-item");
      items.forEach((item) => {
        item.style.display =
          filterValue === "*" ||
          item.classList.contains(filterValue.substring(1))
            ? "block"
            : "none";
      });
      msnryInstance.layout();
    });
  };

  const initializeMasonryInstance = (gridSelector, itemClass, instanceKey) => {
    const grid = document.querySelector(gridSelector);
    if (!grid || masonryInstances[instanceKey]) return;

    imagesLoaded(grid, () => {
      const msnry = new Masonry(grid, {
        itemSelector: "." + itemClass,
        percentPosition: true,
        transitionDuration: 0,
      });

      masonryInstances[instanceKey] = msnry;
      const filters = document.querySelector(grid.dataset.filters);
      if (filters) {
        setupMasonryGrid(grid, filters, msnry);
      }
      msnry.layout();
    });
  };

  const setupGallery = () => {
    const grid = document.getElementById("gallery-grid");
    if (!grid) return;
    galleryData.forEach((item, index) => {
      const gridItem = document.createElement("div");
      gridItem.className = `grid-item ${item.category}`;
      gridItem.innerHTML = `
        <div class="cursor-pointer gallery-item-inner" data-index="${index}">
          <img class="w-full h-auto object-cover" src="${item.imageUrl}" alt="${item.title}">
        </div>
      `;
      grid.appendChild(gridItem);
    });
    grid.addEventListener("click", (event) => {
      const item = event.target.closest(".gallery-item-inner");
      if (item) {
        const startIndex = parseInt(item.dataset.index, 10);
        initSplideModal(galleryData, startIndex, "gallery");
      }
    });
  };

  const setupProducts = () => {
    const grid = document.getElementById("product-grid");
    if (!grid) return;
    productData.forEach((item, index) => {
      const gridItem = document.createElement("div");
      gridItem.className = `grid-item ${item.category}`;
      gridItem.innerHTML = `
        <div class="cursor-pointer product-item-inner bg-white rounded-lg shadow-md overflow-hidden" data-index="${index}">
          <img src="${item.imageUrl}" alt="${item.title}" class="w-full h-auto">
          <div class="p-3 text-center">
            <h4 class="font-semibold">${item.title}</h4>
            <p class="text-sm text-gray-600">Rp ${item.price.toLocaleString(
              "id-ID"
            )}</p>
          </div>
        </div>
      `;
      grid.appendChild(gridItem);
    });
    grid.addEventListener("click", (event) => {
      const item = event.target.closest(".product-item-inner");
      if (item) {
        const startIndex = parseInt(item.dataset.index, 10);
        initSplideModal(productData, startIndex, "product");
      }
    });
  };

  init();
});
