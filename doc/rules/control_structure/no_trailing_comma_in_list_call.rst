=======================================
Rule ``no_trailing_comma_in_list_call``
=======================================

Remove trailing commas in list function calls.

Warning
-------

This rule is deprecated and will be removed on next major version
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You should use ``no_trailing_comma_in_singleline`` instead.

Examples
--------

Example #1
~~~~~~~~~~

.. code-block:: diff

   --- Original
   +++ New
    <?php
   -list($a, $b,) = foo();
   +list($a, $b) = foo();

Rule sets
---------

The rule is part of the following rule set:

@Laravel
  Using the `@Laravel <./../../ruleSets/Laravel.rst>`_ rule set will enable the ``no_trailing_comma_in_list_call`` rule.
