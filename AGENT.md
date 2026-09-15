# AI Agent Instructions for Student Success Project

This document defines the rules, style guidelines, and behavioral constraints for all AI agents operating within this repository.
You must strictly follow these instructions to ensure consistency, adhere to the project's architecture, and respect the requested workflow.

## 1. Agent Autonomy & Workflow

- **Guided Autonomy**: You are expected to be helpful and proactive but operate under guided autonomy.
- **Planning & Approval**: For any major architectural changes or complex implementations, you MUST create an implementation plan and wait for explicit user approval before executing code changes.
- **Scoping**: When executing tasks, stick strictly to the user's requirements. Do not over-engineer or add unnecessary features.

## 2. Tech Stack & Architecture

- **Core Stack**: The project is built on **Laravel (PHP)** for the backend, **Blade** templates for the frontend structure, **Bootstrap 5** for the foundational layout, and **Vanilla CSS** for component overrides and custom styling.
- **Constraint**: Do NOT introduce new frontend frameworks (like Vue.js, React, Alpine.js, or Livewire) or backend technologies unless explicitly requested by the user.

## 3. UI/UX & Design System

- **Source of Truth**: Always refer to `context/CONTEXT.md` as the absolute source of truth for the design system.
- **Design Adherence**: When creating or modifying UI components, you must follow the exact color palettes (e.g. `navy`, `teal`), typography (`BCSans`), border-radius patterns (especially asymmetric radii), spacing, and interactive states defined in `context/CONTEXT.md`.
- **Styling Method**: Favor Vanilla CSS classes to extend and override Bootstrap 5 components. Do not rely heavily on inline styles.

# **User Personas & Context**

You are an AI assistant operating within the "Student Success" project. Your development approach must be guided by the following user personas and contexts in `context/USERS.md`, which represent the target audience and their environments.

## General Design Principles (The "B.C. Standard")

- **Accessibility First:** Ensure WCAG 2.1 AA compliance (contrast, keyboard navigation).
- **Clarity over Density:** Prioritize readability and simple navigation, especially on mobile.
- **Trust & Professionalism:** Maintain a clean, official, and trustworthy aesthetic suitable for education.

## 4. Code Formatting & Conventions

- **Follow Existing Patterns**: Maintain the existing file formatting and naming conventions present in the repository. Look at the surrounding code and match its style.
- **No Strict AI Linting**: Do not proactively apply strict automated linting or formatting tools (like PSR-12 enforcers or Prettier) unless specifically requested by the user. Just blend your code into the surrounding style.
- **Documentation**: Preserve all existing comments and docstrings. If writing new complex logic, add concise, helpful comments.

## 5. Testing Requirements

- **No AI-Driven Testing**: You are not required to proactively write or run automated tests (e.g., PHPUnit, Pest) for new features or bug fixes.
- **Focus**: Dedicate your effort to implementing the core logic and UI components accurately based on user direction.

## 6. Common Project Paths Reference

- **Frontend Views**: `php-bin/resources/views/`
- **Backend Controllers**: `php-bin/app/Http/Controllers/`

## 7. Documentation

- **Updating docs**: When making changes to the design system, update `context/CONTEXT.md` to reflect the changes.
- **Memory**: You are expected to update `context/MEMORY.md` when you learn something new about the project or changes to the design system.
