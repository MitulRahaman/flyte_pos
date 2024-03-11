/**
 * The function `handleToggleNav` toggles the visibility of a navigation element on small screens by
 * adding or removing specific CSS classes.
 */
const handleToggleNav = (e) => {
  const navForSM = document.getElementById("nav-for-SM");
  if (navForSM.classList.contains("-left-full")) {
    navForSM.classList.remove("-left-full");
    navForSM.classList.add("left-0");
  } else {
    navForSM.classList.add("-left-full");
    navForSM.classList.remove("left-0");
  }
};

// *************************** Function to create a typewriter effect for an array of words
/**
 * The typewriter function simulates typing and deleting words in a loop with customizable options like
 * cursor style, speed, and looping behavior.
 * @param words - The `words` parameter is an array containing the words that you want to display in a
 * typewriter effect. In this case, the array contains the words "business", "finance", and "ambition".
 * @param element - The `element` parameter in the `typewriter` function is the HTML element where the
 * typewriter effect will be displayed. In this case, it is selected using
 * `document.getElementById("typewriter")`, which means the element with the id "typewriter" on the
 * webpage where the script is running
 * @param options - {
 */
function typewriter(words, element, options) {
  const defaults = {
    cursor: true,
    cursorBlinking: true,
    loop: true,
    cursorStyle: ".",
    typeSpeed: 100,
    deleteSpeed: 100,
    delaySpeed: 1500,
  };

  const settings = { ...defaults, ...options };

  let wordIndex = 0;
  let letterIndex = 0;
  let isDeleting = false;
  let loopCount = 0;

  function type() {
    const currentWord = words[wordIndex];
    const isCursorVisible =
      settings.cursor && (!settings.loop || (settings.loop && loopCount > 0));

    element.innerHTML =
      currentWord.substring(0, letterIndex) +
      (isCursorVisible ? settings.cursorStyle : ".");

    if (!isDeleting && letterIndex < currentWord.length) {
      letterIndex++;
      setTimeout(type, settings.typeSpeed);
    } else if (isDeleting && letterIndex > 0) {
      letterIndex--;
      setTimeout(type, settings.deleteSpeed);
    } else {
      isDeleting = !isDeleting;
      if (isDeleting) {
        setTimeout(type, settings.delaySpeed);
      } else {
        wordIndex++;
        if (wordIndex === words.length) {
          wordIndex = 0;
          loopCount++;
          if (
            !settings.loop ||
            (settings.loop && loopCount === settings.loop)
          ) {
            return;
          }
        }
        setTimeout(type, settings.typeSpeed);
      }
    }
  }
  type();
}

const words = ["business", "finance", "ambition"];
const element = document.getElementById("typewriter");
typewriter(words, element);
//*------------------------------- End of TypeWriter

/**
 * The function `handleShowTab` toggles the visibility of tab description elements based on the
 * provided ID.
 * @param id - The `id` parameter in the `handleShowTab` function is the identifier of the tab
 * description that needs to be shown.
 */
const handleShowTab = (id) => {
  const resourcePlaningTabDescription = document.getElementById(
    "resource_planing-tab_description"
  );
  const tabDescriptionDivs =
    resourcePlaningTabDescription.querySelectorAll(".tab-description");
  const tabBtn1 = document.getElementById("tab_btn_1");
  const svgIcon1 = document.getElementById("svg_icon_1");
  const borderRemover1 = document.getElementById("tab_btn_1-border_remover");
  const tabBtn2 = document.getElementById("tab_btn_2");
  const svgIcon2 = document.getElementById("svg_icon_2");
  const borderRemover2 = document.getElementById("tab_btn_2-border_remover");
  const tabBtn3 = document.getElementById("tab_btn_3");
  const svgIcon3 = document.getElementById("svg_icon_3");
  const borderRemover3 = document.getElementById("tab_btn_3-border_remover");

  //   Condition for tab 1
  if (id !== "1") {
    tabBtn1.classList.remove("border-8", "bg-[#F2F6FF]");
    tabBtn1.classList.add("bg-[#0E51FF]", "text-white");
    svgIcon1.setAttribute("fill", "#fff");
    borderRemover1.classList.remove("bg-[#F2F6FF]", "w-full", "-left-0");
    borderRemover1.classList.add(
      "bg-[#0E51FF]",
      "w-[calc(100%+8px)]",
      "-left-[4px]"
    );
  } else if (id === "1") {
    tabBtn1.classList.remove("bg-[#0E51FF]", "text-white");
    tabBtn1.classList.add("border-8", "bg-[#F2F6FF]");
    svgIcon1.setAttribute("fill", "#0E51FF");
    borderRemover1.classList.remove(
      "bg-[#0E51FF]",
      "w-[calc(100%+8px)]",
      "-left-[4px]"
    );
    borderRemover1.classList.add("bg-[#F2F6FF]", "w-full", "-left-0");
  }

  //   Condition for tab 2
  if (id !== "2") {
    tabBtn2.classList.remove("border-8", "bg-[#F5EDFF]", "text-[#521A9B]");
    tabBtn2.classList.add("bg-[#521A9B]", "text-white");
    svgIcon2.setAttribute("fill", "#fff");
    borderRemover2.classList.remove("bg-[#F5EDFF]", "w-full", "-left-0");
    borderRemover2.classList.add(
      "bg-[#521A9B]",
      "-left-[4px]",
      "w-[calc(100%+8px)]"
    );
  } else if (id === "2") {
    tabBtn2.classList.remove("bg-[#521A9B]", "text-white");
    tabBtn2.classList.add("border-8", "bg-[#F5EDFF]", "text-[#521A9B]");
    svgIcon2.setAttribute("fill", "#521A9B");
    borderRemover2.classList.remove(
      "bg-[#521A9B]",
      "-left-[4px]",
      "w-[calc(100%+8px)]"
    );
    borderRemover2.classList.add("bg-[#F5EDFF]", "w-full", "-left-0");
  }

  //   Condition for tab 3
  if (id !== "3") {
    tabBtn3.classList.remove("border-8", "bg-[#ECFBF2]", "text-[#20B15A]");
    tabBtn3.classList.add("bg-[#20B15A]", "text-white");
    svgIcon3.setAttribute("fill", "#fff");
    borderRemover3.classList.remove("bg-[#ECFBF2]", "w-full", "-left-0");
    borderRemover3.classList.add(
      "bg-[#20B15A]",
      "-left-[4px]",
      "w-[calc(100%+8px)]"
    );
  } else if (id === "3") {
    tabBtn3.classList.remove("bg-[#20B15A]", "text-white");
    tabBtn3.classList.add("border-8", "bg-[#ECFBF2]", "text-[#20B15A]");
    svgIcon3.setAttribute("fill", "#20B15A");
    borderRemover3.classList.remove(
      "bg-[#20B15A]",
      "-left-[4px]",
      "w-[calc(100%+8px)]"
    );
    borderRemover3.classList.add("bg-[#ECFBF2]", "w-full", "-left-0");
  }

  tabDescriptionDivs.forEach((tabDescriptionDiv) => {
    if (tabDescriptionDiv.id === id) {
      tabDescriptionDiv.classList.remove("hidden");
    } else {
      tabDescriptionDiv.classList.add("hidden");
    }
  });
};

// FAQ
const questionButtons = document.querySelectorAll(".faq-question-button");
questionButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const answer = this.nextElementSibling;
    const isHidden = answer.classList.contains("hidden");
    document.querySelectorAll(".faq-answer").forEach((answer) => {
      answer.classList.add("hidden");
    });

    document.querySelectorAll(".faq-question-button").forEach((button) => {
      button.style.color = "#000";
    });

    document.querySelectorAll(".faq-content").forEach((content) => {
      content.classList.add("border-black");
    });

    document.querySelectorAll(".faq-question-button svg path").forEach((path) => {
      path.setAttribute("fill", "#000");
    });

    this.style.color = !isHidden ? "#000" : "#336dec";
    answer.classList.toggle("hidden", !isHidden);
    const container = this.closest(".faq-content");
    container.classList.toggle("border-[#0E51FF]", isHidden);
    container.classList.toggle("border-black", !isHidden);

    const svgPath = this.querySelector("svg path");
    svgPath.setAttribute("fill", !isHidden ? "#000" : "#336dec");
  });
});
